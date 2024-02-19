<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\MatchesController;

Route::get('/', function () {
    return view('sportsync');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/matches', [MatchesController::class, 'findMatches'])->name('matches'); // Include 'web' middleware
    Route::resource('activities', ActivityController::class);
});
