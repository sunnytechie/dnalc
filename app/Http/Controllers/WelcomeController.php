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
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $sliders = Slider::orderBy('id', 'desc')->get();
        $sponsors = Sponsor::orderBy('id', 'desc')->get();
        $about = About::select('thumbnail', 'thumbnail_2', 'heading_1', 'content_1', 'heading_2', 'heading_2_content', 'content')->first();
        $faqs = Faq::orderBy('id', 'desc')->paginate(5);
        $webinars = Webinar::orderBy('id', 'desc')->get();
        $dnaresources = DnaResource::orderBy('id', 'desc')->get();
        $posts = Post::inRandomOrder()->take(5)->get();
        $teams = Team::orderBy('id', 'desc')->get();

        return view('welcome', compact('sliders', 'sponsors', 'about', 'faqs', 'webinars', 'dnaresources', 'posts', 'teams'));
    }
}
