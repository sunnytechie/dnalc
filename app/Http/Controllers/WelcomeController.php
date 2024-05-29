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
        $sliders = Slider::inRandomOrder()->take(5)->get();
        $sponsors = Sponsor::inRandomOrder()->get();
        $about = About::select('thumbnail', 'thumbnail_2', 'heading_1', 'content_1', 'heading_2', 'heading_2_content', 'content')->first();
        $faqs = Faq::orderBy('id', 'desc')->paginate(3);
        $webinars = Webinar::inRandomOrder()->get();
        $dnaresources = DnaResource::inRandomOrder()->get();
        $posts = Post::inRandomOrder()->take(5)->get();
        $teams = Team::orderBy('id', 'desc')->paginate(5);

        return view('welcome', compact('sliders', 'sponsors', 'about', 'faqs', 'webinars', 'dnaresources', 'posts', 'teams'));
    }
}
