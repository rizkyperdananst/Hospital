<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClassRoomController;
use App\Http\Controllers\Admin\NurseController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\OfficerController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NameRoomController;
use App\Http\Controllers\Admin\PaymentInvoiceController;
use App\Http\Controllers\Admin\PolyController;
use App\Http\Controllers\Admin\RegistrationController;

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

        Route::get('/patient', [PatientController::class, 'index'])->name('patient.index');
        Route::get('/patient/create', [PatientController::class, 'create'])->name('patient.create');
        Route::get('getClassRoom/{id}', [PatientController::class, 'getClassRoom'])->name('getClassRoom');
        Route::post('/patient/store', [PatientController::class, 'store'])->name('patient.store');
        Route::get('/patient/show/{id}', [PatientController::class, 'show'])->name('patient.show');
        Route::get('/patient/edit/{id}', [PatientController::class, 'edit'])->name('patient.edit');
        Route::post('/patient/update/{id}', [PatientController::class, 'update'])->name('patient.update');
        Route::post('/patient/destroy/{id}', [PatientController::class, 'destroy'])->name('patient.destroy');

        Route::resource('/nameroom', NameRoomController::class);
        Route::resource('/classroom', ClassRoomController::class);
        Route::resource('/registration', RegistrationController::class);
        Route::resource('/poly', PolyController::class);
        Route::resource('/admin', AdminController::class);
        Route::resource('/durg', DurgController::class);

        Route::get('/paymentinvoice', [PaymentInvoiceController::class, 'index'])->name('paymentinvoice.index');
        Route::get('/paymentinvoice/create', [PaymentInvoiceController::class, 'create'])->name('paymentinvoice.create');
        Route::get('getNameRoom/{id}', [PaymentInvoiceController::class, 'getNameRoom'])->name('getNameRoom');
        Route::get('getClassRoom/{id}', [PatientController::class, 'getClassRoom'])->name('getClassRoom');
        Route::post('/paymentinvoice/store', [PaymentInvoiceController::class, 'store'])->name('paymentinvoice.store');

    });
});
