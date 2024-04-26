<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/register', [UserController::class, 'create'])
->name('register');
Route::post('/register', [UserController::class, 'store'])
->name('registere');

Route::get('/login', function () {
    return view('Guest/login');
});
// Route::get('/register', function () {
//     return view('Guest/register');
// });
Route::get('/contact', function () {
    return view('Guest/contact');
});
Route::get('/profile', function () {
    return view('User/profile');
});
Route::get('/addTrajet', function () {
    return view('User/addTrajet');
});
Route::get('/editTrajet', function () {
    return view('User/editTrajet');
});
Route::get('/convoiturage', function () {
    return view('User/convoiturage');
});
Route::get('/mesTrajet', function () {
    return view('User/mesTrajet');
});
Route::get('/reservationPassager', function () {
    return view('User/reservationPassager');
});
Route::get('/reservationConducteur', function () {
    return view('User/reservationConducteur');
});
Route::get('/stat', function () {
    return view('Admin/stat');
});
Route::get('/ville', function () {
    return view('Admin/ville');
});
Route::get('/user', function () {
    return view('Admin/user');
});
Route::get('/verification', function () {
    return view('Admin/verification');
});

