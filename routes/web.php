<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Settings\HomeController;
use App\Http\Controllers\Admin\Settings\ContactController;
use App\Http\Controllers\Admin\Settings\HeaderFooterController;
use App\Http\Controllers\Admin\ContactUsController;

use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\FrontendAboutController;
use App\Http\Controllers\Frontend\FrontendContactController;
use App\Http\Controllers\Frontend\FrontendGallaryController;

use Illuminate\Support\Facades\Route;

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

// Web Site Routes
// Home Page
Route::get('/header', [FrontendHeaderFooterController::class, 'header']);
Route::get('/footer', [FrontendHeaderFooterController::class, 'footer']);
Route::get('/', [FrontendHomeController::class, 'homepage'])->name('homepage');
Route::post('/enquire-submit', [FrontendHomeController::class, 'enquiresubmit'])->name('enquire.submit');
// About Us Page
Route::get('/about-us', [FrontendAboutController::class, 'aboutUs'])->name('about.us');
// Contact Us Page
Route::get('/contact-us', [FrontendContactController::class, 'contactUs'])->name('contact.us');
Route::post('/contact-us/submit', [FrontendContactController::class, 'contactSubmit'])->name('contact.submit');
// Gallary Page
Route::get('/gallary', [FrontendGallaryController::class, 'gallary'])->name('gallary');

// Admin Route
Route::get('/admin', function(){return view('admin.login');})->name('admin.login');


// Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function(){return view('admin.dashboard');})->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Contact Route
    Route::get('/admin/contact', [ContactUsController::class, 'show'])->name('admin.contact');

    // Settings Home Routes
    Route::get('/admin/settings/header-footer', [HeaderFooterController::class, 'homeheader'])->name('settings.homeheader');
    Route::post('/admin/settings/header-footer/submit', [HeaderFooterController::class, 'homeheadersubmit'])->name('settings.homeheader.submit');

    Route::get('/admin/settings/home', [HomeController::class, 'home'])->name('settings.home');
    Route::post('/admin/settings/home/banner/submit', [HomeController::class, 'bannersubmit'])->name('banner.submit');
    Route::post('/admin/settings/home/topheading/submit', [HomeController::class, 'topheadingsubmit'])->name('topheading.submit');
    Route::post('/admin/settings/home/about/submit', [HomeController::class, 'aboutsubmit'])->name('about.submit');
    Route::post('/admin/settings/home/serviceheadline/submit', [HomeController::class, 'serviceheadlinesubmit'])->name('service.headline.submit');
    Route::post('/admin/settings/home/servicecard/submit', [HomeController::class, 'servicecardsubmit'])->name('service.card.submit');
    Route::post('/admin/settings/home/key/headline/submit', [HomeController::class, 'keyheadlinesubmit'])->name('key.headline.submit');
    Route::post('/admin/settings/home/keyachivement/submit', [HomeController::class, 'keyachivement'])->name('keyachivement.submit');
    Route::post('/admin/settings/home/testimonial/headline/submit', [HomeController::class, 'testimonialheadlinesubmit'])->name('testimonial.headline.submit');
    Route::post('/admin/settings/home/gallaryheadline/submit', [HomeController::class, 'gallaryheadlinesubmit'])->name('gallary.headline.submit');
    Route::post('/admin/settings/home/gallary/submit', [HomeController::class, 'gallarysubmit'])->name('gallary.submit');

    // Settings Contact Routes
    Route::get('/admin/settings/contact', [ContactController::class, 'home'])->name('settings.contact');
    Route::post('/admin/settings/contact/heading/submit', [ContactController::class, 'heading'])->name('settings.contact.heading');
    Route::post('/admin/settings/contact/context/submit', [ContactController::class, 'context'])->name('settings.contact.context');
});



require __DIR__.'/auth.php';
