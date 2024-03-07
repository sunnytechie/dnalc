<?php

namespace App\Http\Controllers\Dashboard;

use App\Mail\ContactMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = "Contact Us";
        $pageLink = "Contact";

        return view('pages.contact', compact('pageTitle', 'pageLink'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'nullable',
            'message' => 'required'
        ]);

        //recipient
        $recipient = "info@dnalcnigeria.org";
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $message = $request->message;
        Mail::to($recipient)->send(new ContactMail($name, $email, $phone, $subject, $message));

        // Send mail to the admin
        // Mail::to(config('mail.from.address'))->send(new ContactMail($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully');
    }

    /**
     * Subscriber-visitor to the newsletter.
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);

        if (Subscriber::where('email', $request->email)->exists()) {
            return redirect()->back()->with('failed', 'You have already subscribed');
        }

        Subscriber::create($request->all());

        return redirect()->back()->with('success', 'You have been subscribed successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
