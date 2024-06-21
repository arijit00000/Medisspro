<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
// use App\Http\Controllers\Admin\Settings\HomeController;
// use App\Http\Controllers\Admin\Settings\ContactController;
use App\Http\Controllers\Admin\Settings\HeaderFooterController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DistribuController;

// Temporary
use App\Http\Controllers\TemporayController;

// use App\Http\Controllers\Frontend\FrontendHomeController;
// use App\Http\Controllers\Frontend\FrontendAboutController;
// use App\Http\Controllers\Frontend\FrontendContactController;
// use App\Http\Controllers\Frontend\FrontendGallaryController;

use App\Http\Controllers\Front_End\LayoutsController;
use App\Http\Controllers\Front_End\HomeController;
use App\Http\Controllers\Front_End\AboutusController;
use App\Http\Controllers\Front_End\ServicesController;
use App\Http\Controllers\Front_End\ProductController;
use App\Http\Controllers\Front_End\DistributorController;
use App\Http\Controllers\Front_End\GallaryController;
use App\Http\Controllers\Front_End\BlogController;
use App\Http\Controllers\Front_End\CareerController;
use App\Http\Controllers\Front_End\ContactController;

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
// Route::get('/header', [FrontendHeaderFooterController::class, 'header']);
// Route::get('/footer', [FrontendHeaderFooterController::class, 'footer']);
// Route::get('/', [FrontendHomeController::class, 'homepage'])->name('homepage');
// Route::post('/enquire-submit', [FrontendHomeController::class, 'enquiresubmit'])->name('enquire.submit');
// About Us Page
// Route::get('/about-us', [FrontendAboutController::class, 'aboutUs'])->name('about.us');
// Contact Us Page
// Route::get('/contact-us', [FrontendContactController::class, 'contactUs'])->name('contact.us');
// Route::post('/contact-us/submit', [FrontendContactController::class, 'contactSubmit'])->name('contact.submit');
// Gallary Page
// Route::get('/gallary', [FrontendGallaryController::class, 'gallary'])->name('gallary');

// Admin Route
Route::get('/admin', function(){return view('admin.login');})->name('admin.login');

// Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function(){return view('admin.dashboard');})->name('dashboard');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Contact Route
    Route::get('/admin/contact', [ContactUsController::class, 'show'])->name('admin.contact');
    Route::get('/admin/distributor', [DistribuController::class, 'show'])->name('admin.distributor');
    // Temprary Route
    Route::get('/admin/service', [TemporayController::class, 'show'])->name('temprary.show');

    // Settings Home Routes
    Route::get('/admin/settings/header-footer', [HeaderFooterController::class, 'homeheader'])->name('settings.homeheader');
    Route::post('/admin/settings/header-footer/submit', [HeaderFooterController::class, 'homeheadersubmit'])->name('settings.homeheader.submit');

    // Route::get('/admin/settings/home', [HomeController::class, 'home'])->name('settings.home');
    // Route::post('/admin/settings/home/banner/submit', [HomeController::class, 'bannersubmit'])->name('banner.submit');
    // Route::post('/admin/settings/home/topheading/submit', [HomeController::class, 'topheadingsubmit'])->name('topheading.submit');
    // Route::post('/admin/settings/home/about/submit', [HomeController::class, 'aboutsubmit'])->name('about.submit');
    // Route::post('/admin/settings/home/serviceheadline/submit', [HomeController::class, 'serviceheadlinesubmit'])->name('service.headline.submit');
    // Route::post('/admin/settings/home/servicecard/submit', [HomeController::class, 'servicecardsubmit'])->name('service.card.submit');
    // Route::post('/admin/settings/home/key/headline/submit', [HomeController::class, 'keyheadlinesubmit'])->name('key.headline.submit');
    // Route::post('/admin/settings/home/keyachivement/submit', [HomeController::class, 'keyachivement'])->name('keyachivement.submit');
    // Route::post('/admin/settings/home/testimonial/headline/submit', [HomeController::class, 'testimonialheadlinesubmit'])->name('testimonial.headline.submit');
    // Route::post('/admin/settings/home/gallaryheadline/submit', [HomeController::class, 'gallaryheadlinesubmit'])->name('gallary.headline.submit');
    // Route::post('/admin/settings/home/gallary/submit', [HomeController::class, 'gallarysubmit'])->name('gallary.submit');

    // Settings Contact Routes
    // Route::get('/admin/settings/contact', [ContactController::class, 'home'])->name('settings.contact');
    // Route::post('/admin/settings/contact/heading/submit', [ContactController::class, 'heading'])->name('settings.contact.heading');
    // Route::post('/admin/settings/contact/context/submit', [ContactController::class, 'context'])->name('settings.contact.context');
});


require __DIR__.'/auth.php';

Route::get('/all-clear', function () {

    Artisan::call('route:cache');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    echo 'clear-all';die;
});

// New Routs 

Route::get('/head', [LayoutsController::class, 'header']);
Route::get('/foot', [LayoutsController::class, 'footer']);
Route::get('/', [HomeController::class, 'home'])->name('home.page');
Route::post('/home/services/submit', [HomeController::class, 'querySubmit'])->name('home.submit');
Route::get('/about-us', [AboutusController::class, 'about'])->name('aboutus.page');
Route::get('/services', [ServicesController::class, 'service'])->name('service.page');
Route::post('/services/submit', [ServicesController::class, 'querySubmit'])->name('query.submit');
Route::get('/products', [ProductController::class, 'product'])->name('product.page');
Route::get('/distributor', [DistributorController::class, 'distributor'])->name('distributor.page');
Route::get('/gallay', [GallaryController::class, 'gallary'])->name('gallary.page');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog.page');
Route::get('/career', [CareerController::class, 'career'])->name('career.page');
Route::get('/contact-us', [ContactController::class, 'contact'])->name('contact.page');
Route::post('/contact-us/submit', [ContactController::class, 'contactSubmit'])->name('contact.submit');