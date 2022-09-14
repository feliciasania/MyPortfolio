<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Auth\LoginController@showLoginForm');
Route::post('/','Auth\LoginController@login');

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

// add content
Route::resource('/dashboard','ContentController');

// Route::get('/dashboard/addcontent', function () {
//     return view('addcontent');
// });
// Route::get('/dashboard/content', function () {
//     return view('content');
// });
Route::get('/dashboard/content/addphoto', function () {
    return view('addphoto');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
