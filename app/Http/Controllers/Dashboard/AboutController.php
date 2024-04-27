<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::first();

        return view('dashboard.about.index', compact('about'));
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
        //validate
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'heading_1' => 'nullable',
            'content_1' => 'nullable',
            'heading_2' => 'nullable',
            'heading_2_content' => 'nullable',
            'content' => 'nullable',
            'list_1' => 'nullable',
            'list_2' => 'nullable',
            'list_3' => 'nullable',
            'thumbnail' => 'nullable',
            'thumbnail_2' => 'nullable',
            'phone' => 'nullable',
            'phone_2' => 'nullable',
            'email' => 'nullable',
            'email_2' => 'nullable',
            'address' => 'nullable',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'sunday_schedule' => 'nullable',
            'monday_schedule' => 'nullable',
            'tuesday_schedule' => 'nullable',
            'wednesday_schedule' => 'nullable',
            'thursday_schedule' => 'nullable',
            'friday_schedule' => 'nullable',
            'saturday_schedule' => 'nullable',
        ]);

        //if has thumbnail
        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(570, 540);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/about', $thumbnailName, 'public');
        }

        if ($request->hasFile('thumbnail_2')) {
            //Manager driver for image Processing
            $manager = new ImageManager(new Driver());

            //save the thumbnail_2
            $thumbnail_2 = $manager->read($request->file('thumbnail_2')->getRealPath());
            $thumbnail_2->scaleDown(570, 540);

            $thumbnailName_2 = $request->file('thumbnail_2')->hashName();
            //storeAs
            $file = $request->file('thumbnail_2')->storeAs('uploads/about', $thumbnailName_2, 'public');
        }


        $about = About::first();
        $about->title = $request->title;
        $about->description = $request->description;
        $about->heading_1 = $request->heading_1;
        $about->content_1 = $request->content_1;
        $about->heading_2 = $request->heading_2;
        $about->heading_2_content = $request->heading_2_content;
        $about->content = $request->content;
        $about->list_1 = $request->list_1;
        $about->list_2 = $request->list_2;
        $about->list_3 = $request->list_3;
        if ($request->hasFile('thumbnail')) {
            $about->thumbnail = "uploads/about/$thumbnailName";
        }
        if ($request->hasFile('thumbnail_2')) {
            $about->thumbnail_2 = "uploads/about/$thumbnailName_2";
        }
        $about->phone = $request->phone;
        $about->phone_2 = $request->phone_2;
        $about->email = $request->email;
        $about->email_2 = $request->email_2;
        $about->address = $request->address;
        $about->facebook = $request->facebook;
        $about->twitter = $request->twitter;
        $about->instagram = $request->instagram;
        $about->linkedin = $request->linkedin;
        $about->sunday_schedule = $request->sunday_schedule;
        $about->monday_schedule = $request->monday_schedule;
        $about->tuesday_schedule = $request->tuesday_schedule;
        $about->wednesday_schedule = $request->wednesday_schedule;
        $about->thursday_schedule = $request->thursday_schedule;
        $about->friday_schedule = $request->friday_schedule;
        $about->saturday_schedule = $request->saturday_schedule;
        $about->save();

        return redirect()->back()->with('success', 'Published');
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
