<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsScreenController extends Controller
{
    private function slideNews() {
        $posts = Post::select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->take(5)->get();
        return $posts;
    }

    private function category() {
        return;
    }

    public function newsScreen() {
        return response()->json([
            'status' => true,
            'news' => $this->slideNews(),
            'categories' => $this->category(),
        ]);
    }

    public function allNews() {
        $posts = Post::select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->get();

        return response()->json([
            'status' => true,
            'allnews' => $posts,
        ]);
    }

    public function search() {
        //Scout search
    }
}
