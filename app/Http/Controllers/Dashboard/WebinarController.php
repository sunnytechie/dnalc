<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Webinar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all webinars
        $webinars = Webinar::all();

        //return the view
        return view('dashboard.webinar.index', compact('webinars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.webinar.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //try
        try {

            //validate the request
            $request->validate([
                'title' => 'nullable|string|max:255',
                'thumbnail' => 'required|image',
                'school' => 'required',
                'event_date' => 'required|date',
                'content' => 'required',
                'link' => 'nullable'
            ]);
        } catch (\Exception $e) {
            //return error message
            return redirect()->back()->with('failed', 'Validation failed');
        }

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
            $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(370, 322);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/webinars', $thumbnailName, 'public');
        }

        try {
            //create the webinar
            $webinar = new Webinar();
            $webinar->title = $request->title;
            $webinar->school = $request->school;
            $webinar->event_date = $request->event_date;
            $webinar->description = $request->content;
            $webinar->thumbnail = "uploads/webinars/" . $request->file('thumbnail')->hashName();
            $webinar->link = $request->link;
            $webinar->save();

            //return success message
            return redirect()->route('webinar.index')->with('success', 'Webinar published successfully');
        } catch (\Exception $e) {
            //return error message
            return redirect()->back()->with('failed', 'Failed to create webinar');
        }
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
        $webinar = Webinar::find($id);

        return view('dashboard.webinar.edit', [
            'webinar' => $webinar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'thumbnail' => 'nullable',
            'school' => 'required',
            'event_date' => 'required|date',
            'content' => 'required',
            'link' => 'nullable'
        ]);

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
            $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(370, 322);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/webinars', $thumbnailName, 'public');
        }

        try {
            //create the webinar
            $webinar = Webinar::find($id);
            $webinar->title = $request->title;
            $webinar->school = $request->school;
            $webinar->event_date = $request->event_date;
            $webinar->description = $request->content;
            if ($request->hasFile('thumbnail')) {
                $webinar->thumbnail = "uploads/webinars/" . $request->file('thumbnail')->hashName();
            }

            $webinar->link = $request->link;
            $webinar->save();

            //return success message
            return redirect()->route('webinar.index')->with('success', 'Webinar updated successfully');
        } catch (\Exception $e) {
            //return error message
            return redirect()->back()->with('failed', 'Failed to update webinar');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //delete the webinar
        $webinar = Webinar::find($id);

        //if webinar exists
        if ($webinar) {
            //delete the webinar
            $webinar->delete();

            //return success message
            return redirect()->back()->with('success', 'Webinar deleted successfully');
        } else {
            //return error message
            return redirect()->back()->with('failed', 'Failed to delete webinar');
        }

    }
}
