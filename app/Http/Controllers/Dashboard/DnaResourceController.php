<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\DnaResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class DnaResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get all resources
        $dnaresources = DnaResource::all();

        //return the view
        return view('dashboard.dnaresource.index', compact('dnaresources'));
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
        try {
            //validate the request
            $request->validate([
                'title' => 'nullable|string|max:255',
                'description' => 'nullable',
                'thumbnail' => 'required|image',
                'link' => 'nullable|url'
            ]);
        } catch (\Exception $e) {
            //return error message
            return redirect()->back()->with('failed', 'Validation failed');
        }

        //if has thumbnail
        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(370, 320);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/dnaresource', $thumbnailName, 'public');
        }


        try {
            //create the resource
            $resource = DnaResource::create([
                'title' => $request->title,
                'description' => $request->description,
                'thumbnail' => "uploads/dnaresource/" . $request->file('thumbnail')->hashName(),
                'link' => $request->link
            ]);

            //return success message
            return redirect()->back()->with('success', 'Resource created successfully');
        } catch (\Exception $e) {
            //return error message
            return redirect()->back()->with('failed', 'Resource creation failed');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //tr
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $resource = DnaResource::find($id);
        if ($resource) {
            $resource->delete();
            return redirect()->back()->with('success', 'Resource deleted successfully');
        }
    }
}
