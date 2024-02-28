<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('dashboard.team.index', compact('teams'));
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
            'name' => 'required',
            'title' => 'nullable',
            'about' => 'nullable',
            'quote' => 'nullable',
            'experience' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'thumbnail' => 'required',
            'certificate' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(370, 431);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/teams', $thumbnailName, 'public');
        }

        //store the data
        //$team = Team::create($request->all());
        $team = new Team();
        $team->name = $request->name;
        $team->title = $request->title;
        $team->about = $request->about;
        $team->quote = $request->quote;
        $team->experience = $request->experience;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        $team->thumbnail = "uploads/teams/" . $thumbnailName;
        $team->certificate = $request->certificate;
        $team->save();

        //redirect to the back
        return back()->with('success', 'Team member added successfully');

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
        $team = Team::find($id);
        return view('dashboard.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate the request
        $request->validate([
            'name' => 'required',
            'title' => 'nullable',
            'about' => 'nullable',
            'quote' => 'nullable',
            'experience' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'facebook' => 'nullable',
            'twitter' => 'nullable',
            'linkedin' => 'nullable',
            'instagram' => 'nullable',
            'thumbnail' => 'nullable',
            'certificate' => 'nullable',
        ]);

        if ($request->hasFile('thumbnail')) {
            //Manager driver for image Processing
        $manager = new ImageManager(new Driver());

            //save the thumbnail
            $thumbnail = $manager->read($request->file('thumbnail')->getRealPath());
            $thumbnail->scaleDown(370, 431);

            $thumbnailName = $request->file('thumbnail')->hashName();
            //storeAs
            $file = $request->file('thumbnail')->storeAs('uploads/teams', $thumbnailName, 'public');
        }

        //store the data
        $team = Team::find($id);
        $team->name = $request->name;
        $team->title = $request->title;
        $team->about = $request->about;
        $team->quote = $request->quote;
        $team->experience = $request->experience;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;
        $team->instagram = $request->instagram;
        if ($request->hasFile('thumbnail')) {
            $team->thumbnail = "uploads/teams/" . $thumbnailName;
        }
        $team->certificate = $request->certificate;
        $team->save();

        //redirect to the back
        return back()->with('success', 'Team member updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = Team::find($id);

        //delete the thumbnail
        $thumbnail = public_path('uploads/teams/' . $team->thumbnail);
        if (File::exists($thumbnail)) {
            File::delete($thumbnail);
        }
        $team->delete();
        return back()->with('success', 'Team member deleted successfully');
    }
}
