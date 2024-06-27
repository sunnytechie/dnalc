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
            //'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'flyer' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'link' => 'nullable|string|max:255',
        ]);

        //Manager driver for image Processing
        $manager = new ImageManager(new Driver());



        //if has flyer
        if ($request->hasFile('flyer')) {
            //save the flyer
            $flyer = $manager->read($request->file('flyer')->getRealPath());
            $flyer->scaleDown(1920, 1080);

            $flyerName = $request->file('flyer')->hashName();
            //storeAs
            $file = $request->file('flyer')->storeAs('uploads/slider', $flyerName, 'public');
        }

        //new slider
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->link = $request->link;
        if ($request->hasFile('flyer')) {
        $slider->thumbnail = "uploads/slider/$flyerName";
        $slider->flyer = "uploads/slider/$flyerName";
        }
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
