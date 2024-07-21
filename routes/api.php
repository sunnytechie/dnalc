<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\APi\CommentController;
use App\Http\Controllers\Api\CourseScreenController;
use App\Http\Controllers\Api\HomeScreenController;
use App\Http\Controllers\Api\NewsScreenController;
use App\Http\Controllers\Api\PinkController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\UserController;
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

//user profile
Route::group(['prefix' => 'user', 'middleware' => 'auth:api'], function () {
    Route::post('/profile', [UserController::class, 'profileUpdate']);
    Route::post('/password', [UserController::class, 'passwordUpdate']);
});

//Quest Can
Route::prefix('home')->group(function () {
    Route::get('/', [HomeScreenController::class, 'home']);
});

//Quest Can
Route::post('/search/{type?}', [SearchController::class, 'search']);
Route::get('/faq', [HomeScreenController::class, 'faq']);

//Only Auth
Route::group(['prefix' => 'courses', 'middleware' => 'auth:api'], function () {
    Route::get('/user', [CourseScreenController::class, 'userCourses']);
    Route::post('/apply/{id}', [CourseScreenController::class, 'apply']);
});

//Quest Can
Route::prefix('courses')->group(function () {
    Route::get('/recommended', [CourseScreenController::class, 'recommendedCourses']);
});

//Quest Can
Route::prefix('news')->group(function () {
    Route::get('/', [NewsScreenController::class, 'newsScreen']);
    Route::get('/all', [NewsScreenController::class, 'allNews']);

    Route::get('/categories', [NewsScreenController::class, 'newscategories']);
    Route::post('/filter', [NewsScreenController::class, 'filter']);
});

Route::group(['prefix' => 'news', 'middleware' => 'auth:api'], function () {
    Route::post('/{id}/comment', [CommentController::class, 'store']);
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
