<?php

use App\Http\Controllers\{
    HomeCarouselItemController,
    LandingPageController,
    NewsController,
};
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [LandingPageController::class, 'index'])->name('home.index');
Route::get('/about', [LandingPageController::class, 'about'])->name('home.about');
Route::get('/ecosystem', [LandingPageController::class, 'ecosystem'])->name('home.ecosystem');
Route::get('/roadmap', [LandingPageController::class, 'roadmap'])->name('home.roadmap');
Route::get('/partner', [LandingPageController::class, 'partner'])->name('home.partner');
Route::get('/news', [LandingPageController::class, 'news'])->name('home.news');
Route::get('/news/{news}', [LandingPageController::class, 'newsDetail'])->name('home.news.detail');
Route::get('/contact', [LandingPageController::class, 'contact'])->name('home.contact');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('admin.index');

    Route::resource('/home-carousel-item', 'HomeCarouselItemController');
    Route::resource('/news', 'NewsController');

    Route::get('/news/toggle/{news}', [NewsController::class, 'toggle'])->name('news.toggle');
    Route::get('/home-carousel-item/toggle/{homeCarouselItem}', [HomeCarouselItemController::class, 'toggle'])->name('home-carousel-item.toggle');
    Route::post('/news/image', [NewsController::class, 'imageUpload'])->name('news.image.upload');

});

Auth::routes();
