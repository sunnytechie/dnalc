<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CourseScreenController;
use App\Http\Controllers\Api\HomeScreenController;
use App\Http\Controllers\Api\NewsScreenController;
use App\Http\Controllers\Api\PinkController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Pink
Route::get('/pink', [PinkController::class, 'pink']);

//Authentication
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/forgot/password', [AuthController::class, 'forgotPassword']);
    Route::post('/verify/otp', [AuthController::class, 'verifyOtp']);
    Route::post('/new/password', [AuthController::class, 'newPassword']);
});

Route::prefix('home')->group(function () {
    Route::get('/', [HomeScreenController::class, 'home']);
});

Route::group(['prefix' => 'courses', 'middleware' => 'auth:api'], function () {
    Route::get('/user', [CourseScreenController::class, 'userCourses']);
});

Route::prefix('courses')->group(function () {
    Route::get('/recommended', [CourseScreenController::class, 'recommendedCourses']);
});

Route::prefix('news')->group(function () {
    Route::get('/', [NewsScreenController::class, 'newsScreen']);
    Route::get('/all', [NewsScreenController::class, 'allNews']);
    Route::get('/search', [NewsScreenController::class, 'search']);
});






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
