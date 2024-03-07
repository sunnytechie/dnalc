<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('dashboard.gallery.index', compact('galleries'));
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
        //dd($request->all());
        //validate the request
        $request->validate([
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //store the image
        //Manager driver for image Processing
        if ($request->hasFile('image')) {
            //Manager driver for image Processing
            $manager = new ImageManager(new Driver());

            //save the image
            $image = $manager->read($request->file('image')->getRealPath());
            $image->scaleDown(370, 240);

            $imageName = $request->file('image')->hashName();
            //storeAs
            $file = $request->file('image')->storeAs('uploads/gallery', $imageName, 'public');
        }

        try {
            $gallery = new Gallery();
            $gallery->category = $request->category;
            $gallery->image = "uploads/gallery/" . $imageName;
            $gallery->save();
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error Adding Image');
        }

        return redirect()->back()->with('success', 'Image Added Successfully');
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
        $gallery = Gallery::find($id);
        if ($gallery) {
            //delete the image
            if (File::exists(public_path($gallery->image))) {
                File::delete(public_path($gallery->image));
            }
            $gallery->delete();
            return redirect()->back()->with('success', 'Image Deleted Successfully');
        }
        return redirect()->back()->with('error', 'Error Deleting Image');
    }
}
