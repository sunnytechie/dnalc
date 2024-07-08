<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request): JsonResponse {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'status' => false,
                'error' => 'Invalid login credentials'],
            401);
        }

        $user = Auth::user();

        $token = $user->createToken('MyApp')->accessToken;

        return response()->json([
            'status' => true,
            'access_token' => $token,
            'userDetails' => [
                'user' => $user,
            ]
        ]);

        //else
        return response()->json([
            'status' => false,
            'message' => 'Invalid login credentials',
        ], 401); // 401 Unauthorized status code

    }

    public function register(Request $request): JsonResponse {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email|unique:users', // Email is unique in the 'users' table
            'password' => 'required|min:6', //Minimum 8 characters for the password
            'confirmed_password' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()->first(), // Get the first validation error message
            ], 422); // 422 Unprocessable Entity status code
        }

        $user = User::create([
            'name' => $request['fullname'],
            'email' => $request['email'],
            'email_verified_at' => now(),
            'password' => Hash::make($request['password']),
        ]);

        $token = $user->createToken('MyApp')->accessToken;
        //->token;
        Auth::login($user);

        return response()->json([
            'status' => true,
            'access_token' => $token,
            'userDetails' => [
                'user' => $user,
            ]
        ]);
    }

    public function forgotPassword(Request $request) {
        //collect Emaill and Send Mail
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return response()->json([
                'status' => false,
                'error' => 'Unidentified Email Address'
            ]);
        }

        //send email
        $otp = rand(0000, 9999);
        Mail::to($request->email)->send(new ForgotPasswordMail($otp, $user->name));

        $user->user_otp = $otp;
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Reset pin sent to ' . $request->email,
        ]);
    }

    public function verifyOtp(Request $request) {
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        $user = User::where('email', $request->email)
                ->where('user_otp', $request->otp)
                ->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'error' => 'Reset Pin incorrect.'
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Confirmed, proceed'
        ]);
    }

    public function newPassword(Request $request) {
        //validation
        $validator = Validator::make($request->all(), [
            'otp' => 'required',
            'email' => 'required', // Email is unique in the 'users' table
            'password' => 'required|min:6', //Minimum 8 characters for the password
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => $validator->errors()], 401);
        }

        //verify otp again
        $user = User::where('email', $request->email)
                ->where('user_otp', $request->otp)
                ->first();

        if (!$user) {
            return response()->json([
                'status' => false,
                'error' => 'An Error occured'
            ]);
        }

        //Update Password and delete otp
        $user->user_otp = null;
        $user->password = Hash::make($request['password']);
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Password Reset successful'
        ]);

    }
}
