<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/i', function () {
//     return view('index');
// });
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/abc', [UserController::class, 'abc']);
Route::get('/text', [UserController::class, 'data']);
Route::resource('/admin', AdminController::class);