<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function profileUpdate(Request $request) {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'phone' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        $userID = Auth::user()->id;

        try {
            $user = User::find($userID);
            $user->name = $request->fullname;
            $user->phone = $request->phone;
            $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Profile updated'
        ], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'error' => 'Something went wrong'
            ], 401);
        }
    }

    public function passwordUpdate(Request $request): JsonResponse {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        if (!Hash::make($request['current_password'] == Auth::user()->password)) {
            return response()->json([
                'status' => false,
                'error' => 'Incorrect current password'
            ]);
        }

        try {
            $user = User::find(Auth::user()->id);
            $user->password = $request->new_password;
            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'Password changed successfully'
            ]);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'status' => false,
                'error' => 'Please try again.'
            ], 401);
        }


    }
}
