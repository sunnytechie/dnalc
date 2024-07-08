<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Workshop;
use Illuminate\Http\JsonResponse;

class SearchController extends Controller
{
    private function posts($search){
        $posts = Post::search($search)->get();

        return $posts;
    }

    private function workshops($search){
        $workshops = Workshop::search($search)->get();

        return $workshops;
    }

    public function search(Request $request, $type = null): JsonResponse {
        if ($type != 'courses' && $type != 'news') {
            return response()->json([
                'status' => false,
                'error' => 'Only news and courses are searchable'
            ], 500);
        }

        if ($type == 'courses') {
            return response()->json([
                'status' => true,
                'courses' => $this->workshops($request->search),
            ], 200);
        }

        //Else
        return response()->json([
            'status' => true,
            'news' => $this->posts($request->search),
        ], 200);
    }
}
