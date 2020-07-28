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


/*
Route::get('/hola', function () {
    return 'hello World';
});
//  add prameters
Route::get('/greet/{name}', function ($name) {
    return  "hello $name";
});

// add optional prameters
 Route::get('/idiot/{idiot?}', function ($name = "lucas") {
    return  "$name idiot";
})->name("idiota");

// name route

Route::get('/insulto/{idiot?}', function ($name = "lucas") {
    return  "$name <a href='".route("idiota")."'>eres un</a> ";
});

// view

Route::get('home/{name?}', function ($name = "lucas") {
    // return view('home')->with("nombre",$name);
    $posts = ["post1", "post2", "post3", "post4",];
    $posts2 = [];

    return view('home', ['nombre' => $name , 'posts' => $posts, 'posts2' => $posts2]);
})->name("home"); */

//Route::get('post', 'PostController@index');

Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\CategoryController');
Route::resource('dashboard/user', 'dashboard\UserController');

Route::get('/','web\webController@index')->name('index');

Route::get('/detail/{id}', 'web\webController@detail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
