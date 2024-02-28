<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class SponsorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sponsors = Sponsor::orderBy('created_at', 'desc')->get();
        return view('dashboard.sponsor.index', compact('sponsors'));
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
        //validate request
        $request->validate([
            'title' => 'required|string|max:255',
            'link' => 'nullable|string|max:255',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(200, 120);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/sponsors', $thumbnailName, 'public');
        }

        //create new sponsor
        $sponsor = new Sponsor();
        $sponsor->title = $request->title;
        $sponsor->thumbnail = "uploads/sponsors/" . $thumbnailName;
        $sponsor->link = $request->link;
        $sponsor->save();

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
        $sponsor = Sponsor::findOrFail($id);

        //find thumbnail with $sponsor->thumbnail
        $thumbnail = public_path($sponsor->thumbnail);

        //if thumbnail exists
        if (File::exists($thumbnail)) {
            //delete thumbnail
            File::delete($thumbnail);
        }

        $sponsor->delete();

        return redirect()->back()->with('success', 'Deleted');
    }
}
