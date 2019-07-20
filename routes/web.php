<?php

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
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/recipes', function () {
    return view('recipes');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('siswa', function () {
    return view('siswa');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('frontend', function () {
    return view('frontend.index');
});
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/admin', function () {
            return view('backend.index');
        });
        Route::resource('kategori', 'KategoriController');
        Route::resource('tag', 'TagController');
        Route::resource('artikel', 'ArtikelController');
    }
);
