<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Models\Workshopapplication;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Validator;
use Unicodeveloper\Paystack\Facades\Paystack;
use Intervention\Image\Drivers\Imagick\Driver;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshops = Workshop::with('workshopapplications')->get();
        $workshops->each(function ($workshop) {
            $count = $workshop->workshopapplications->where('status', 'success')->count();
            $workshop->successful_application_count = $count;
        });

        return view('dashboard.workshop.index', compact('workshops'));
    }

    public function applications($id)
    {
        $workshop = Workshop::find($id);
        $applications = Workshopapplication::where('workshop_id', $id)->orderBy('id', 'desc')
                        ->where('status', 'success')
                        ->get();
        return view('dashboard.workshop.applications', compact('applications', 'workshop'));
    }

    public function applicationForm(string $id)
    {
        $workshop = Workshop::find($id);
        $pageTitle = $workshop->title;
        $pageLink = "Application Form";
        return view('dashboard.workshop.form', compact('pageTitle', 'pageLink', 'id', 'workshop'));
    }

    public function storeApplication(Request $request, $id)
    {
        try {
            $validation = Validator::make($request->all(), [
                'fullname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'country' => 'nullable',
                'institution' => 'nullable',
                'scholarship' => 'nullable',
                'infoSource' => 'nullable',
                'referral' => 'nullable',
                'othersource' => 'nullable', //added
                'scholarshiprequestamount' => 'nullable', //added
                'scholarshipreason' => 'nullable', //added
                'question1' => 'nullable', //added
                'question2' => 'nullable', //added
                'question3' => 'nullable', //added
                'question4' => 'nullable', //added
                'question5' => 'nullable', //added
                'role' => 'required', //added
                'address' => 'required', //added
                'area' => 'required', //added
                'receipt' => 'nullable',
                'paymentMethod' => 'required',
            ]);

            if ($validation->fails()) {
                return back()->withInput()->with('failed', 'All fields are required');
            }

            if ($request->paymentMethod == 'offline') {
                $validation = Validator::make($request->all(), [
                    'receipt' => 'required',
                ]);

                if ($validation->fails()) {
                    return back()->withInput()->with('failed', 'Please upload evidence of payment receipt.');
                }

                if ($request->hasFile('receipt')) {
                    //Manager driver for image Processing
                $manager = new ImageManager(new Driver());

                    //save the thumbnail
                    $receipt = $manager->read($request->file('receipt')->getRealPath());
                    $receipt->scaleDown(370, 322);

                    $receiptName = $request->file('receipt')->hashName();
                    //storeAs
                    $file = $request->file('receipt')->storeAs('uploads/receipt', $receiptName, 'public');
                }
            }

            $workshop = Workshop::find($id);
            $fee = $workshop->fee ? $workshop->fee : 50000;

            $application = new Workshopapplication();
            $application->fullname = $request->fullname;
            $application->email = $request->email;
            $application->phone = $request->phone;
            $application->country = $request->country;
            $application->institution = $request->institution;
            $application->scholarship = $request->scholarship;
            $application->info_source = $request->info_source;
            $application->referral = $request->referral;
            $application->workshop_id = $id;
            $application->othersource = $request->othersource; //added
            $application->scholarshiprequestamount = $request->scholarshiprequestamount; //added
            $application->scholarshipreason = $request->scholarshipreason; //added
            $application->question1 = $request->question1; //added
            $application->question2 = $request->question2; //added
            $application->question3 = $request->question3; //added
            $application->question4 = $request->question4; //added
            $application->question5 = $request->question5; //added
            $application->role = $request->role; //added
            $application->address = $request->address; //added
            $application->area = $request->area; //added
            if ($request->hasFile('receipt') == 'offline') {
                $application->receipt = "uploads/receipt/" . $receiptName;
                $application->status = 'success';
            }
            $application->save();

            if ($request->paymentMethod == 'online') {
                //For now return failed
                return back()->withInput()->with('failed', 'We are currently not collecting online payment.');

                //paystack payment
                $ref = Paystack::genTranxRef();
                $callbackUrl = route('workshop.payment.callback', ['id' => $application->id, 'ref' => $ref]);
                $data = array(
                    "amount" => $fee * 100,
                    "reference" => $ref,
                    "email" => $request->email,
                    "callback_url" => $callbackUrl,
                );

                return Paystack::getAuthorizationUrl($data)->redirectNow();
            }

            return redirect()->back()->with('success', 'Application has been submitted successfully');

        } catch (\Exception $e) {
            //return $e->getMessage();
            return redirect()->back()->with('failed', 'An error occurred while saving the workshop');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.workshop.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate the form
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'venue' => 'nullable',
            'slots' => 'nullable',
            'fee' => 'nullable',
            'note' => 'nullable',
            'flyer' => 'nullable',
            'status' => 'nullable',
        ]);

        if ($request->hasFile('flyer')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the flyer
            $flyer = $manager->read($request->file('flyer')->getRealPath());
            $flyer->scaleDown(370, 431);

            $flyerName = $request->file('flyer')->hashName();
            //storeAs
            $file = $request->file('flyer')->storeAs('uploads/workshops', $flyerName, 'public');
        }

        try {
            //save the workshop
        $workshop = new Workshop();
        $workshop->title = $request->title;
        $workshop->type = $request->type;
        $workshop->start_date = $request->start_date;
        $workshop->end_date = $request->end_date;
        $workshop->venue = $request->venue;
        $workshop->slots = $request->slots;
        $workshop->fee = $request->fee;
        $workshop->note = $request->note;
        if ($request->hasFile('flyer')) {
            $workshop->flyer = "uploads/workshops/".$flyerName;
        }
        $workshop->status = $request->status;
        $workshop->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'An error occurred while saving the workshop');
        }

        return redirect()->route('workshop.index')->with('success', 'Workshop published successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $workshop = Workshop::find($id);
        return view('dashboard.workshop.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the form
        $request->validate([
            'title' => 'required',
            'type' => 'required',
            'start_date' => 'nullable',
            'end_date' => 'nullable',
            'venue' => 'nullable',
            'slots' => 'nullable',
            'fee' => 'nullable',
            'note' => 'nullable',
            'flyer' => 'nullable',
            'status' => 'nullable',
        ]);

        if ($request->hasFile('flyer')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the flyer
            $flyer = $manager->read($request->file('flyer')->getRealPath());
            $flyer->scaleDown(370, 431);

            $flyerName = $request->file('flyer')->hashName();
            //storeAs
            $file = $request->file('flyer')->storeAs('uploads/workshops', $flyerName, 'public');
        }

        try {
            //save the workshop
        $workshop = Workshop::find($id);
        $workshop->title = $request->title;
        $workshop->type = $request->type;
        $workshop->start_date = $request->start_date;
        $workshop->end_date = $request->end_date;
        $workshop->venue = $request->venue;
        $workshop->slots = $request->slots;
        $workshop->fee = $request->fee;
        $workshop->note = $request->note;
        if ($request->hasFile('flyer')) {
            $workshop->flyer = "uploads/workshops/".$flyerName;
        }
        $workshop->status = $request->status;
        $workshop->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('failed', 'An error occurred while saving the workshop');
        }

        return redirect()->back()->with('success', 'Workshop updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
