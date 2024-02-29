<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Dashboard\FaqController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\AboutController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\SliderController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\SponsorController;
use App\Http\Controllers\Dashboard\WebinarController;
use App\Http\Controllers\Dashboard\DnaResourceController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('index.welcome');
//store contact
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
//dashboard
Route::get('/dashboard', [AdminController::class, 'control'])->name('control.dashboard')->middleware('auth', 'admin');

Route::prefix('pages')->group(function () {
    //about us
    Route::get('/history/cshl', [PagesController::class, 'historycshl'])->name('historycshl');
    Route::get('/parent/center', [PagesController::class, 'parentcenter'])->name('parentcenter');
    Route::get('/mission/gou', [PagesController::class, 'missiongou'])->name('missiongou');
    Route::get('/vision/gou', [PagesController::class, 'visiongou'])->name('visiongou');
    Route::get('/philosoph/ygou', [PagesController::class, 'philosophygou'])->name('philosophygou');
    Route::get('/about/dnalc', [PagesController::class, 'aboutdnalc'])->name('aboutdnalc');
    Route::get('/history/story', [PagesController::class, 'historystory'])->name('historystory');
    Route::get('/mission/vision', [PagesController::class, 'missionvision'])->name('missionvision');
    Route::get('/board/directors', [PagesController::class, 'boarddirectors'])->name('boarddirectors');
    Route::get('/admin/staff', [PagesController::class, 'adminstaff'])->name('adminstaff');
    Route::get('/teaching/staff', [PagesController::class, 'teachingstaff'])->name('teachingstaff');
    Route::get('/media/center', [PagesController::class, 'mediacenter'])->name('mediacenter');
    //trainings
    Route::get('/signature/course', [PagesController::class, 'signaturecourse'])->name('signaturecourse');
    Route::get('/dna/facility', [PagesController::class, 'dnafacility'])->name('dnafacility');
    Route::get('/saturday/dna', [PagesController::class, 'saturdaydna'])->name('saturdaydna');
    //research
    Route::get('/sss/internship', [PagesController::class, 'sssinternship'])->name('sssinternship');
    Route::get('/urex', [PagesController::class, 'urex'])->name('urex');
    Route::get('/post/graduate', [PagesController::class, 'postgraduate'])->name('postgraduate');
    Route::get('/drde', [PagesController::class, 'drde'])->name('drde');
    Route::get('/pdrp', [PagesController::class, 'pdrp'])->name('pdrp');
    //multimedia
    Route::get('/workshop', [PagesController::class, 'workshop'])->name('workshop');
    Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
    Route::get('/conference', [PagesController::class, 'conference'])->name('conference');
    Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
    //more
    Route::get('/employment', [PagesController::class, 'employment'])->name('employment');
    Route::get('/faq', [PagesController::class, 'faq'])->name('faq');
    //contact
    Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
    //in page link
    Route::get('/world/dna', [PagesController::class, 'worlddna'])->name('worlddna');
    Route::get('/dna/science', [PagesController::class, 'dnascience'])->name('dnascience');
    Route::get('/genome/science', [PagesController::class, 'genomescience'])->name('genomescience');
    Route::get('/dna/barcoding', [PagesController::class, 'dnabarcoding'])->name('dnabarcoding');
    Route::get('/dna/metabarcoding', [PagesController::class, 'dnametabarcoding'])->name('dnametabarcoding');
});

//group admin and prefix admin and middleware auth
Route::prefix('admin')->middleware('auth', 'admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    //slider
    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.index');
        //Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::delete('/destroy/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');
    });

    //sponsor
    Route::prefix('sponsor')->group(function () {
        Route::get('/', [SponsorController::class, 'index'])->name('sponsor.index');
        Route::get('/create', [SponsorController::class, 'create'])->name('sponsor.create');
        Route::post('/store', [SponsorController::class, 'store'])->name('sponsor.store');
        Route::get('/edit/{id}', [SponsorController::class, 'edit'])->name('sponsor.edit');
        Route::patch('/update/{id}', [SponsorController::class, 'update'])->name('sponsor.update');
        Route::delete('/destroy/{id}', [SponsorController::class, 'destroy'])->name('sponsor.destroy');
    });

    //about
    Route::prefix('about')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
        Route::get('/create', [AboutController::class, 'create'])->name('about.create');
        Route::post('/store', [AboutController::class, 'store'])->name('about.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('about.edit');
        Route::patch('/update/{id}', [AboutController::class, 'update'])->name('about.update');
        Route::delete('/destroy/{id}', [AboutController::class, 'destroy'])->name('about.destroy');
    });

    //contact
    Route::prefix('contact')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contact.index');
        //Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
        //Route::get('/edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
        //Route::patch('/update/{id}', [ContactController::class, 'update'])->name('contact.update');
        Route::delete('/destroy/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
    });

    //teams
    Route::prefix('team')->group(function () {
        Route::get('/', [TeamController::class, 'index'])->name('team.index');
        Route::get('/create', [TeamController::class, 'create'])->name('team.create');
        Route::post('/store', [TeamController::class, 'store'])->name('team.store');
        Route::get('/edit/{id}', [TeamController::class, 'edit'])->name('team.edit');
        Route::put('/update/{id}', [TeamController::class, 'update'])->name('team.update');
        Route::delete('/destroy/{id}', [TeamController::class, 'destroy'])->name('team.destroy');
    });

    //faq
    Route::prefix('faq')->group(function () {
        Route::get('/', [FaqController::class, 'index'])->name('faq.index');
        Route::get('/create', [FaqController::class, 'create'])->name('faq.create');
        Route::post('/store', [FaqController::class, 'store'])->name('faq.store');
        Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('faq.edit');
        Route::put('/update/{id}', [FaqController::class, 'update'])->name('faq.update');
        Route::delete('/destroy/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');
    });

    //posts
    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::get('/create', [PostController::class, 'create'])->name('post.create');
        Route::post('/store', [PostController::class, 'store'])->name('post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
        Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update');
        Route::delete('/destroy/{id}', [PostController::class, 'destroy'])->name('post.destroy');
    });

    //webinar
    Route::prefix('webinar')->group(function () {
        Route::get('/', [WebinarController::class, 'index'])->name('webinar.index');
        Route::get('/create', [WebinarController::class, 'create'])->name('webinar.create');
        Route::post('/store', [WebinarController::class, 'store'])->name('webinar.store');
        Route::get('/edit/{id}', [WebinarController::class, 'edit'])->name('webinar.edit');
        Route::put('/update/{id}', [WebinarController::class, 'update'])->name('webinar.update');
        Route::delete('/destroy/{id}', [WebinarController::class, 'destroy'])->name('webinar.destroy');
    });

    //dnaresources
    Route::prefix('dnaresource')->group(function () {
        Route::get('/', [DnaResourceController::class, 'index'])->name('dnaresource.index');
        Route::get('/create', [DnaResourceController::class, 'create'])->name('dnaresource.create');
        Route::post('/store', [DnaResourceController::class, 'store'])->name('dnaresource.store');
        Route::get('/edit/{id}', [DnaResourceController::class, 'edit'])->name('dnaresource.edit');
        Route::put('/update/{id}', [DnaResourceController::class, 'update'])->name('dnaresource.update');
        Route::delete('/destroy/{id}', [DnaResourceController::class, 'destroy'])->name('dnaresource.destroy');
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
