<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Slider;
use App\Models\Sponsor;
use App\Models\Webinar;
use App\Models\DnaResource;
use App\Models\Gallery;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $sliders = Slider::inRandomOrder()->take(5)->get();
        $sponsors = Sponsor::inRandomOrder()->get();
        $about = About::select('thumbnail', 'thumbnail_2', 'heading_1', 'content_1', 'heading_2', 'heading_2_content', 'content')->first();
        $faqs = Faq::orderBy('id', 'desc')->paginate(3);
        $webinars = Webinar::inRandomOrder()->get();
        $dnaresources = DnaResource::inRandomOrder()->get();
        $posts = Post::inRandomOrder()->take(5)->get();

        $teams = Team::orderBy('id', 'desc')
                            ->where('category', 'administrative')
                            ->paginate(5);

        return view('welcome', compact('sliders', 'sponsors', 'about', 'faqs', 'webinars', 'dnaresources', 'posts', 'teams'));
    }

    public function newindex() {
        $sliders = Slider::orderBy('id', 'DESC')->inRandomOrder()->take(3)->get();
        $sponsors = Sponsor::inRandomOrder()->get();
        $about = About::select('thumbnail', 'thumbnail_2', 'heading_1', 'content_1', 'heading_2', 'heading_2_content', 'content')->first();
        $faqs = Faq::orderBy('id', 'desc')->paginate(3);
        $webinars = Webinar::inRandomOrder()->get();
        $dnaresources = DnaResource::inRandomOrder()->get();
        $posts = Post::inRandomOrder()->take(5)->get();
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();

        $teams = Team::orderBy('id', 'desc')
                            ->where('category', 'administrative')
                            ->paginate(5);
        return view('index', compact('sliders', 'galleries', 'footerposts', 'sponsors', 'about', 'faqs', 'webinars', 'dnaresources', 'posts', 'teams'));
    }

    public function about() {
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();
        return view('ui.pages.about', [
            'galleries' => $galleries,
            'footerposts' => $footerposts,
        ]);
    }

    public function vacancy() {
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();
        return view('ui.pages.vacancy', [
            'galleries' => $galleries,
            'footerposts' => $footerposts,
        ]);
    }

    public function organizations() {
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();
        return view('ui.pages.organizations', [
            'galleries' => $galleries,
            'footerposts' => $footerposts,
        ]);
    }

    public function management() {
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();
        return view('ui.pages.management', [
            'galleries' => $galleries,
            'footerposts' => $footerposts,
        ]);
    }

    public function organogram() {
        $footerposts = Post::orderBy('id', 'DESC')->take(2)->get();
        $galleries = Gallery::orderBy('id', 'DESC')->take(6)->get();
        return view('ui.pages.organogram', [
            'galleries' => $galleries,
            'footerposts' => $footerposts,
        ]);
    }
}
