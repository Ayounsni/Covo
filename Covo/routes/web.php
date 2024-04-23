<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Guest/home');
});
Route::get('/login', function () {
    return view('Guest/login');
});
Route::get('/register', function () {
    return view('Guest/register');
});
Route::get('/contact', function () {
    return view('Guest/contact');
});
Route::get('/profile', function () {
    return view('User/profile');
});
Route::get('/addTrajet', function () {
    return view('User/addTrajet');
});

