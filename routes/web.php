<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/addimg', [App\Http\Controllers\HomeController::class, 'addimg'])->name('addimg');
Route::post('/addimgform', [App\Http\Controllers\HomeController::class, 'addimgform'])->name('addimgform');
Route::get('/showimg', [App\Http\Controllers\HomeController::class, 'showimg'])->name('showimg');
Route::get('/addarticle', [App\Http\Controllers\HomeController::class, 'addarticle'])->name('addarticle');
Route::post('/addarticleform', [App\Http\Controllers\HomeController::class, 'addarticleform'])->name('addarticleform');
Route::get('/addvideo', [App\Http\Controllers\HomeController::class, 'addvideo'])->name('addvideo');
Route::post('/addvideoform', [App\Http\Controllers\HomeController::class, 'addvideoform'])->name('addvideoform');
Route::get('/showvideo', [App\Http\Controllers\HomeController::class, 'showvideo'])->name('showvideo');
Route::get('/showarticle', [App\Http\Controllers\HomeController::class, 'showarticles'])->name('showarticle');
Route::get('/deletevideo/{id}', [App\Http\Controllers\HomeController::class, 'deletevideo'])->name('deletevideo');
Route::get('/deletearticle/{id}', [App\Http\Controllers\HomeController::class, 'deletearticle'])->name('deletearticle');
Route::get('/deleteimg/{id}', [App\Http\Controllers\HomeController::class, 'deletevideo'])->name('deleteimg');
Route::get('/images', [App\Http\Controllers\front::class, 'img'])->name('img');
Route::get('/blog', [App\Http\Controllers\front::class, 'blog'])->name('blog');
Route::get('/single-article/{id}', [App\Http\Controllers\front::class, 'singlearticle'])->name('singlearticle');
Route::get('/videos', [App\Http\Controllers\front::class, 'videos'])->name('vid');
Route::get('/single-video/{id}', [App\Http\Controllers\front::class, 'singlevideo'])->name('singlevideo');
Route::post('/sendemail', [App\Http\Controllers\MailController::class, 'index'])->name('sendmail');
