<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{

    public function store(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json([
                'status' => false,
                'error' => 'Post not found',
            ], 401);
        }

        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        $comment = Comment::create([
            'post_id' => $id,
            'comment' => $request->comment,
            'user_name' => Auth::user()->name,
        ]);

        return response()->json([
            'status' => true,
            'error' => 'Comment posted!',
        ], 200);

    }

}
