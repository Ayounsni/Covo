<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VilleController;
use App\Http\Controllers\TrajetController;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\ReservationController;

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

    Route::get('/motdepasse', [ForgetPasswordController::class, 'password'])
    ->name('password');
    Route::post('/motdepasse', [ForgetPasswordController::class, 'passwordPost'])
    ->name('password.post');
    Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])
    ->name('reset.password');
    Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])
    ->name('reset.password.post');

    Route::get('/contact', function () {
        return view('Guest/contact');
    });

});

Route::middleware('admin')->group(function () {
    Route::get('/ville', [VilleController::class, 'index'])
    ->name('ville');
    Route::post('/ville', [VilleController::class, 'store'])
    ->name('addVille');
    Route::put('/ville/{ville}', [VilleController::class, 'update'])
    ->name('editVille');
    Route::delete('/ville/{ville}', [VilleController::class, 'destroy'])
    ->name('deleteVille');
    Route::get('/search-villes/search', [TrajetController::class, 'searchVilles'])
    ->name('search.villes.admin');

    Route::put('/gestionUser/{user}', [UserController::class, 'autoriser'])
    ->name('aut');
    Route::put('/gestionUsers/{user}', [UserController::class, 'ban'])
    ->name('ban');
    Route::get('/gestionUser', [AdminController::class, 'user'])
    ->name('user.gestion');

    Route::get('/verification', [AdminController::class, 'cin'])
    ->name('verification');
    Route::put('/verifConf/{cin}', [CinController::class, 'confirmer'])
    ->name('confirmer');
    Route::put('/verifRej/{cin}', [CinController::class, 'rejeter'])
    ->name('rejeter');

    Route::get('/route', [AdminController::class, 'route'])
    ->name('route');
    Route::put('/route/{trajet}', [TrajetController::class, 'confirmer'])
    ->name('confirmer.route');
    Route::put('/routee/{trajet}', [TrajetController::class, 'rejeter'])
    ->name('rejeter.route');


    Route::get('/stat', [AdminController::class, 'index'])
    ->name('stat');


    
});

Route::middleware('user')->group(function () {
    Route::put('/profile/{user}', [UserController::class, 'update'])
    ->name('profile.update');
    Route::get('/profile', [UserController::class, 'index'])
    ->name('profile');

    Route::post('/addVoiture', [VoitureController::class, 'store'])
    ->name('voiture');
    Route::post('/addCin', [CinController::class, 'store'])
    ->name('cin');
    Route::post('/addEva/{user}', [EvaluationController::class, 'store'])
    ->name('evaluation');

    Route::get('/addTrajet', [TrajetController::class, 'create'])
    ->name('addTrajet');
    Route::post('/addTrajete', [TrajetController::class, 'store'])
    ->name('addTrajete');
    Route::get('/editTrajet/{trajet}', [TrajetController::class, 'edit'])
    ->name('editTrajet');
    Route::put('/editTrajete/{trajet}', [TrajetController::class, 'update'])
    ->name('editTrajete');
    Route::delete('/deleteTrajet/{trajet}', [TrajetController::class, 'destroy'])
    ->name('deleteTrajet');
    Route::get('/trajet', [TrajetController::class, 'show'])
    ->name('trajet');

    Route::post('/reservation/{trajet}', [ReservationController::class, 'store'])
    ->name('reservation');
    Route::get('/reservationPassager', [ReservationController::class, 'passager'])
    ->name('passager');
    Route::get('/reservationConducteur', [ReservationController::class, 'conducteur'])
    ->name('conducteur');

    Route::put('/reservationRej/{reservation}', [ReservationController::class, 'rejeter'])
    ->name('rejet');
    Route::put('/reservationConf/{reservation}', [ReservationController::class, 'confirmer'])
    ->name('confirm');

    Route::get('/convoiturage', [TrajetController::class, 'index'])
    ->name('convoiturage');
    Route::post('/convoiturage', [TrajetController::class, 'index'])
    ->name('search');

    Route::get('/search-villes', [TrajetController::class, 'searchVilles'])
    ->name('search.villes');

});

Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])
    ->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/user/{user}', [UserController::class, 'show'])
    ->name('user');
});




