<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CollegeController;
use App\Http\Controllers\CollegeCourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\InfoCounterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Web routes
Route::get('/', [UiController::class, 'home'])->name('home');
Route::get('/about-us', [UiController::class, 'about'])->name('about-us');
Route::get('/services', [UiController::class, 'services'])->name('services');
Route::get('/service/{slug}', [UiController::class, 'service'])->name('service');
Route::get('/blogs', [UiController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [UiController::class, 'blogDetail'])->name('blog');
Route::get('/faqs', [UiController::class, 'faqs'])->name('faq');
Route::get('/contact', [UiController::class, 'contact'])->name('contact');
Route::get('/terms', [UiController::class, 'terms'])->name('terms');
Route::post('/inquiry', [UiController::class, 'storeInquiry'])->name('inquiry.store');

Route::get('/colleges', [UiController::class, 'colleges'])->name('colleges');
Route::get('/college/{slug}', [UiController::class, 'collegeDetail'])->name('college');

Route::get('/nearest-college',[UiController::class,'getNearestColleges']);
Route::get('/travel-colleges',[UiController::class,'travelCollege']);

Route::get('/shortest-path',[UiController::class,'getPaths']);


Route::get('/courses', [UiController::class, 'courses'])->name('courses');
Route::get('/course/{slug}', [UiController::class, 'courseDetail'])->name('course');


//Admin Routes
Route::get('dashboard', [DashboardController::class,'index'])->middleware('auth');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('about-us', AboutUsController::class)->only(['edit', 'update']);
    Route::resource('setting', SettingController::class)->only(['edit', 'update']);
    Route::resource('blogs', BlogController::class);
    Route::resource('colleges', CollegeController::class);
    Route::resource('courses', CollegeCourseController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('faqs', FaqController::class)->except('show');
    Route::resource('infocounter', InfoCounterController::class)->only(['edit', 'update']);

});