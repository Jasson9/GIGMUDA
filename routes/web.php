<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
// Route::get('/footer', function () {
//     return view('footer');
// });
// Route::get('/header', function () {
//     return view('navbar');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

