<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'desc')->get();
        return view('dashboard.slider.index', compact('sliders'));
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
        //validate the request
        $request->validate([
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            ////'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(1920, 1080);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/slider', $thumbnailName, 'public');
        }

        ////if has logo
        ////if ($request->hasFile('logo')) {
        ////    //save the thumbnail
            ////$thumbnail = $manager->read($request->file('thumbnail'));
        ////    $logo = $manager->read($request->file('logo')->getRealPath());

        ////    $logo->scaleDown(219, 251, function ($constraint) {
        ////        $constraint->aspectRatio();
        ////        $constraint->upsize();
        ////    });

        ////    $directory = public_path('uploads/slider/');
        ////    if (!File::exists($directory)) {
        ////        File::makeDirectory($directory, 0777, true, true);
        ////          }

        ////    $logoName = $request->file('logo')->hashName();
        ////    $logoPath = $logo->save($directory . $logoName);
        ////}

        //new slider
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->link = $request->link;
        if ($request->hasFile('thumbnail')) {
        $slider->thumbnail = "uploads/slider/$thumbnailName";
        }
        ////if ($request->hasFile('logo')) {
        ////$slider->logo = "/uploads/slider/$logoName";
        ////}
        $slider->save();

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
        $slider = Slider::find($id);

        //find thumbnail with $slider->thumbnail
        $thumbnail = public_path($slider->thumbnail);

        //if thumbnail exists
        if (File::exists($thumbnail)) {
            //delete thumbnail
            File::delete($thumbnail);
        }

        $slider->delete();

        return redirect()->back()->with('success', 'Deleted');
    }
}
