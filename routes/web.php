<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PersonController;

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
    return view('home');
})->name('home');

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/posts', [PostController::class, 'index'])->name ('posts.index');
Route::get('/post/{post}', [PostController::class, 'show'])->name ('posts.show');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/post', [PostController::class, 'create'])->name ('posts.create');
    Route::post('/post', [PostController::class, 'store'])->name ('posts.store');

    Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name ('posts.edit');
    Route::put('/post/{post}', [PostController::class, 'update'])->name ('posts.update');

    Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::resource('/groups',GroupController::class)->parameters('groups');
});

Route::get('/posts/{user}',[PostController::class,'filterByUser'])->name('posts.filterByUser');

// para ver por nombre buscar http://127.0.0.1:8000/group/php
Route::get('/group/{name}',[GroupController::class,'showByName']);

Route::get('/people', [PersonController::class, 'index'])->name ('people.index');
Route::get('/person/{person}', [PersonController::class, 'show'])->name ('people.show');

Route::get('/contact',  [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

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
