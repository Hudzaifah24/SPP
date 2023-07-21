<?php

use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\LandingPageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// LANDING PAGE
Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');

// AUTH
Route::get('/login', [AuthController::class, 'login_page'])->name('login.page');
Route::post('/login/logic', [AuthController::class, 'login_logic'])->name('login.logic');
Route::get('/register', [AuthController::class, 'register_page'])->name('register.page');
Route::post('/register/logic', [AuthController::class, 'register_logic'])->name('register.logic');

// ADMIN
require __DIR__ . '/admin.php';
