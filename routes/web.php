<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\NurseController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\OfficerController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::prefix('/admin')->group(function() {
    Route::middleware('auth')->group(function() {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

        Route::resource('/profile', ProfileController::class);
        Route::resource('/officer', OfficerController::class);
        Route::resource('/nurse', NurseController::class);
        Route::resource('/doctor', DoctorController::class);
        Route::resource('/patient', PatientController::class);
        // Route::resource('/room', RoomController::class);
        Route::get('/room', [RoomController::class, 'index'])->name('room.index');
        Route::get('/room/create', [RoomController::class, 'create'])->name('room.create');
        Route::get('getClassRoom/{id}', [RoomController::class, 'getClassRoom'])->name('getClassRoom');
        Route::post('/room/store', [RoomController::class, 'store'])->name('room.store');

        Route::resource('/admin', AdminController::class);
        Route::resource('/durg', DurgController::class);

    });
});
