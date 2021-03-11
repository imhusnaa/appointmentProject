<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    return view('pages.about');
});


// Route::get('/', function () {
//     //return view('welcome');
//     return '<h1>Hellow</h1>';
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('home');
Route::get('/test', [App\Http\Controllers\PagesController::class, 'test'])->name('test');
Route::get('/booking', [App\Http\Controllers\PagesController::class, 'booking'])->name('booking');

Route::resource('posts', App\Http\Controllers\PostsController::class);
//Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');
