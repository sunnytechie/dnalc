<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Postcategory;

class NewsScreenController extends Controller
{
    private function slideNews() {
        $posts = Post::select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->take(5)->get();
        foreach ($posts as $post) {
            $post->image = asset('storage/' . $post->thumbnail);
            $post->makeHidden('thumbnail');
        }
        $posts = $posts->shuffle();
        
        return $posts;
    }

    private function category() {
        $categories = Postcategory::orderBy('id', 'DESC')->with('posts')->get();

        foreach ($categories as $category) {
            $category->makeHidden('created_at', 'updated_at');

            foreach ($category->posts as $post) {
                $post->image = asset('storage/' . $post->thumbnail);
                $post->makeHidden('thumbnail', 'created_at', 'updated_at');
            }
        }
        return $categories;
    }

    public function newsScreen() {
        return response()->json([
            'status' => true,
            'SlideNews' => $this->slideNews(),
            'categories' => $this->category(),
        ], 200);
    }

    public function allNews() {
        $posts = Post::select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->get();
        foreach ($posts as $post) {
            $post->image = asset('storage/' . $post->thumbnail);
            $post->makeHidden('thumbnail');
        }

        return response()->json([
            'status' => true,
            'allnews' => $posts,
        ], 200);
    }

}
