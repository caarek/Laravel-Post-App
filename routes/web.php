<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [HomeController::class, 'show']);

//Route::get('/logout', 'LoginController@logout');
//
//Route::get('/post/new', 'PostController@new');
//
//Route::post('/post/add', 'PostController@add');
//
//Route::delete('/post/remove/{id}', 'PostController@remove')->name('post.remove');
//
//Route::get('/post/{id}', 'PostController@show')->name('post.show');
//
//Route::get('/profile/{username}', 'ProfileController@show')->name('profile.show');
//
//Route::get('/home', 'HomeController@index')->name('home');

require __DIR__.'/auth.php';
