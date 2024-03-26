<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Workshop;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Workshopapplication;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class WorkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshops = Workshop::all();
        return view('dashboard.workshop.index', compact('workshops'));
    }

    public function applications($id)
    {
        $workshop = Workshop::find($id);
        $applications = Workshopapplication::where('workshop_id', $id)->orderBy('id', 'desc')->get();
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
            $request->validate([
                'fullname' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'country' => 'nullable',
                'institution' => 'nullable',
                'scholarship' => 'nullable',
                'info_source' => 'nullable',
                'referral' => 'nullable',
            ]);

            $workshop = new Workshopapplication();
            $workshop->fullname = $request->fullname;
            $workshop->email = $request->email;
            $workshop->phone = $request->phone;
            $workshop->country = $request->country;
            $workshop->institution = $request->institution;
            $workshop->scholarship = $request->scholarship;
            $workshop->info_source = $request->info_source;
            $workshop->referral = $request->referral;
            $workshop->workshop_id = $id;
            $workshop->save();

            return redirect()->back()->with('success', 'Application has been submitted successfully');

        } catch (\Exception $e) {
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
