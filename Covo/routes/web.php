<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;

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

// Route::get('/', function () {
//     return view('Guest/home');
// });

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('Guest/home');
    });
    Route::get('/register', [RegisterController::class, 'create'])
    ->name('register');
    Route::post('/register', [RegisterController::class, 'store'])  
    ->name('registere');
    Route::get('/login', [AuthController::class, 'create'])
    ->name('login');
    Route::post('/login', [AuthController::class, 'store'])
    ->name('logine');

});

Route::get('/logout', [AuthController::class, 'logout'])
->name('logout');

Route::get('/contact', function () {
    return view('Guest/contact');
});
Route::put('/profile/{user}', [UserController::class, 'update'])
->name('profile.update');

Route::get('/profile', [UserController::class, 'index'])
->name('profile');
Route::get('/dashboard', [DashboardController::class, 'index']);

Route::post('/addVoiture', [VoitureController::class, 'store'])
->name('voiture');
Route::post('/addCin', [CinController::class, 'store'])
->name('cin');
Route::post('/addEva/{user}', [EvaluationController::class, 'store'])
->name('evaluation');

Route::get('/user/{user}', [UserController::class, 'show'])
->name('user');

Route::get('/addTrajet', [TrajetController::class, 'create'])
->name('addTrajet');
Route::post('/addTrajete', [TrajetController::class, 'store'])
->name('addTrajete');


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

Route::get('/stat', [AdminController::class, 'index'])
->name('stat');
Route::get('/ville', function () {
    return view('Admin/ville');
});
Route::get('/user', function () {
    return view('Admin/user');
});
Route::get('/verification', function () {
    return view('Admin/verification');
});

