<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Post;
use App\Models\Slider;
use App\Models\Workshop;
use Illuminate\Http\Request;

class HomeScreenController extends Controller
{
    private function upcomingEvent() {
        //load the most recent (first()) upcoming event
        $slider = Slider::orderBy('id', 'DESC')->first();

        return [
            'title' => $slider->title,
            'date' => $slider->created_at,
            'icon' => asset('storage/' . $slider->flyer),
            'description' => $slider->description,
            'webviewLink' => $slider->link,
        ];
    }

    private function recentNews() {
        $posts = Post::with('comments')->select('id', 'title', 'content', 'thumbnail', 'created_at')->orderBy('id', 'DESC')->take(7)->get();
        foreach ($posts as $post) {
            $post->image = asset('storage/' . $post->thumbnail);
            $post->share_link = route('blog.post', ['id' => $post->id]);
            $post->makeHidden('thumbnail');
            $post->makeHidden('user_id');
        }
        return $posts;
    }

    private function annualWorkshop() {
        $workshops = Workshop::select('id', 'title', 'note', 'fee', 'type', 'start_date', 'end_date', 'flyer', 'created_at')->orderBy('id', 'DESC')->take(7)->get();

        foreach ($workshops as $workshop) {
            $workshop->details = $workshop->note;
            $workshop->image = asset('storage/' . $workshop->flyer);
            $workshop->makeHidden('note', 'flyer');
        }

        return $workshops;
    }

    public function home() {
        return response()->json([
            'status' => true,
            'upcomingEvent' => $this->upcomingEvent(),
            'recentNews' => $this->recentNews(),
            'annualWorkshops' => $this->annualWorkshop(),
        ], 200);
    }

    public function faq() {
        return response()->json([
            'status' => true,
            'faq' => Faq::orderBy('id', 'ASC')->get()
        ], 200);
    }
}
