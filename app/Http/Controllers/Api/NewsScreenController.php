<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Postcategory;

class NewsScreenController extends Controller
{
    private function slideNews() {
        $posts = Post::with('comments')->select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->take(5)->get();
        foreach ($posts as $post) {
            $post->image = asset('storage/' . $post->thumbnail);
            $post->share_link = route('blog.post', ['id' => $post->id]);
            $post->makeHidden('thumbnail');
            $post->makeHidden('user_id');
        }
        $posts = $posts->shuffle();

        return $posts;
    }

    private function category() {
        $categories = Postcategory::orderBy('id', 'DESC')->with(['posts.comments'])->get();

        foreach ($categories as $category) {
            $category->makeHidden('created_at', 'updated_at');

            foreach ($category->posts as $post) {
                $post->image = asset('storage/' . $post->thumbnail);
                $post->makeHidden('thumbnail', 'updated_at');
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
        $posts = Post::with('comments')->select('id', 'title', 'content', 'created_at', 'thumbnail')->orderBy('id', 'DESC')->get();
        foreach ($posts as $post) {
            $post->image = asset('storage/' . $post->thumbnail);
            $post->share_link = route('blog.post', ['id' => $post->id]);
            $post->makeHidden('thumbnail');
        }

        return response()->json([
            'status' => true,
            'allnews' => $posts,
        ], 200);
    }

    public function categories() {
        $categories = Postcategory::orderBy('id', 'DESC')
                        ->get();

        return response()->json([
            'status' => true,
            'categories' => $categories
        ]);

    }

    public function filter(Request $request) {
        if ($request->has('categories')) {
            $categories = json_decode($request->categories);

            if (json_last_error() !== JSON_ERROR_NONE) {
                // Handle JSON decoding error
                return response()->json([
                    'status' => false,
                    'error' => 'Error in category selection',
                ], 400);
            }

            //if (!empty($categories)) {
            //    $query = Postcategory::with(['posts.comments'])->whereIn('id', $categories);
            //}

            //$news = $query->get();


            if (!empty($categories)) {
                $query = Postcategory::with(['posts.comments'])->whereIn('id', $categories);
                $news = $query->get();
            }

            foreach ($news as $category) {
                foreach ($category->posts as $post) {
                    $post->image = asset('storage/' . $post->thumbnail);
                    $post->makeHidden('thumbnail');
                }
            }

            return response()->json([
                'status' => true,
                'news' => $news
            ]);
        }

        else {
            return response()->json([
                'status' => false,
                'error' => 'Please select one or more category',
            ], 401);
        }
    }

}
