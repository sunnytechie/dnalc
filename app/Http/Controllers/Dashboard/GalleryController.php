<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GalleryCategory;
use App\Models\GallerySubCategory;
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
        $categories = GalleryCategory::with('gallery_sub_categories')->get();

        return view('dashboard.gallery.index', compact('galleries', 'categories'));
    }

    public function newcategory(Request $request) {

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid(). '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->storeAs('public/gallerycover', $fileName);
        }

        try {
            $category = new GalleryCategory();
            $category->title = $request->title;
            $category->image = $fileName ?? null;
            $category->save();
            return back()->with('success', "Category added.");
        } catch (\Throwable $th) {
            return back()->with('failed', "Error oocured.");
        }
    }

    public function deletecategory($id) {
        try {
            $category = GalleryCategory::find($id);
            $subcategories = GallerySubCategory::where('gallery_category_id', $id)->get();
            foreach ($subcategories as $subcategory) {
                $subcategory->delete();
            }
            $category->delete();
            return back()->with('success', "Category deleted.");
        } catch (\Throwable $th) {
            //throw $th;
            return back()->with('failed', "Error oocured.");
        }
    }

    public function newsubcategory(Request $request) {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = uniqid(). '_' . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $file->storeAs('public/gallerycover', $fileName);
        }

        try {
            $category = new GallerySubCategory();
            $category->title = $request->title;
            $category->image = $fileName ?? null;
            $category->gallery_category_id = $request->category;
            $category->save();
            return back()->with('success', "Sub Category added.");
        } catch (\Throwable $th) {
            return back()->with('failed', "Error oocured.");
        }
    }

    public function deletesubcategory($id) {
        try {
            $category = GallerySubCategory::find($id);
            $category->delete();
            return back()->with('success', "Category deleted.");
        } catch (\Throwable $th) {
            return back()->with('failed', "Error oocured.");
        }
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

        if ($request->hasFile('images')) {
            $files = $request->file('images');

            foreach ($files as $file) {
                // Generate a unique file name
                $fileName = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();

                // Store the file
                $file->storeAs('uploads/gallery', $fileName, 'public');

                try {
                    // Save the file information in the database
                    $gallery = new Gallery();
                    $gallery->category = $request->category;
                    $gallery->image = "uploads/gallery/" . $fileName;
                    $gallery->save();
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Error Adding Image');
                }
            }
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
