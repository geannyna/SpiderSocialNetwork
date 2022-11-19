<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;


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


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/wall', [PostController::class, 'index'])->name ('wall');

Route::get('/post/{post}', [PostController::class, 'show'])->name ('post');
Route::get('/newpost', [PostController::class, 'create'])->name ('newpost');
Route::post('/savepost', [PostController::class, 'store'])->name ('savepost');

Route::get('/editpost/{post}', [PostController::class, 'edit'])->name ('editpost');
Route::post('/updatepost/{post}', [PostController::class, 'update'])->name ('updatepost');
Route::post('/deletepost', [PostController::class, 'destroy']);

Route::get('/contact',  [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/people', function () {
    return view('people');
})->name('people');



Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');


Route::get('/landing', function () {
    return redirect()->route ('home');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name ('aboutus');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
