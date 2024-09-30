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

Auth::routes([
    "register" => "true",
    "login" => "true",
    "verify" => "true",
    "forgot" => "true",
    "confirm" => "true"
]);


// Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

