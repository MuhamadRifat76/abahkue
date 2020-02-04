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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});
// Route::get('index', function () {
//     return view('index');
// });
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/single-blog', function () {
    return view('single-blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('index2');
});
Route::get('/testimoni', function () {
    return view('testimoni');
});
Route::get('/galerikegiatan', function () {
    return view('galerikegiatan');
});


Auth::routes(['register' => false]);
Route::group(['/prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/home', function () {
        return view("admin.home");
    });
    Route::get('/testimoni', 'TestimoniController@index');

    Route::get('/home', 'HomeController@index')->name('home');
});
