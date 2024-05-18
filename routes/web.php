<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


//Routing Page Index
Route::get('/', function () {
    return view('index');
});


//Routing Page Store Data
Route::post('/form-input', [App\Http\Controllers\FormController::class, 'store']);


//Routing Page Login
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [App\Http\Controllers\LoginController::class, 'login_proses']);
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout']);


//Routing Register
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('register');
Route::post('/register-proses', [App\Http\Controllers\RegisterController::class, 'register_proses']);


//Routing Page Reset Password
Route::get('/forgot-password', [App\Http\Controllers\ForgotPasswordController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password-act', [App\Http\Controllers\ForgotPasswordController::class, 'forgot_password_act'])->name('forgot-password-act');


//Routing Validasi Forgot Password
Route::get('/validasi-forgot-password/{token}', [App\Http\Controllers\ForgotPasswordController::class, 'validasi_forgot_password'])->name('validasi-forgot-password');
Route::post('/validasi-forgot-password-act', [App\Http\Controllers\ForgotPasswordController::class, 'validasi_forgot_password_act'])->name('validasi-forgot-password-act');


// Middleware Untuk Memeriksa Apakah Pengguna Telah Login?
Route::middleware(['auth'])->group(function () {
    // Routing Page Menu
    Route::get('/menu', function () {
        return view('menu');
    });

    //Routing Page Pengguna
    Route::get('/pengguna', [App\Http\Controllers\PenggunaController::class, 'index']);
    Route::delete('/pengguna/destroy/{id}', [App\Http\Controllers\PenggunaController::class, 'destroy']);

    //Routing Page Dashboard
    Route::get('/dashboard', function () {
    return view('dashboard');
    });


    //Routing Page Ayah
    Route::get('/Ayah/ayah', [App\Http\Controllers\AyahController::class, 'index']);
    Route::get('/Ayah/ayah/page-update/{id}', [App\Http\Controllers\AyahController::class, 'updateAyah']);
    Route::post('/Ayah/ayah/store', [App\Http\Controllers\AyahController::class, 'store']);
    Route::put('/Ayah/ayah/update/{id}', [App\Http\Controllers\AyahController::class, 'update']);
    Route::delete('/Ayah/ayah/destroy/{id}', [App\Http\Controllers\AyahController::class, 'destroy']);

    // Routing Page Ibu
    Route::get('/Ibu/ibu', [App\Http\Controllers\IbuController::class, 'index']);
    Route::get('/Ibu/ibu/page-update/{id}', [App\Http\Controllers\IbuController::class, 'updateIbu']);
    Route::put('/Ibu/ibu/update/{id}', [App\Http\Controllers\IbuController::class, 'update']);
    Route::delete('/Ibu/ibu/destroy/{id}', [App\Http\Controllers\IbuController::class, 'destroy']);

    // Routing Page Anak
    Route::get('/Anak/anak', [App\Http\Controllers\AnakController::class, 'index']);
    Route::get('/Anak/anak/page-update/{id}', [App\Http\Controllers\AnakController::class, 'updateAnak']);
    Route::put('/Anak/anak/update/{id}', [App\Http\Controllers\AnakController::class, 'update']);
    Route::delete('/Anak/anak/destroy/{id}', [App\Http\Controllers\AnakController::class, 'destroy']);
});



// // Routing Page Menu
// Route::get('/menu', function () {
//     return view('menu');
// });

// //Routing Page Ayah
// Route::get('/Ayah/ayah', [App\Http\Controllers\AyahController::class, 'index']);
// Route::get('/Ayah/ayah/page-update/{id}', [App\Http\Controllers\AyahController::class, 'updateAyah']);
// Route::post('/Ayah/ayah/store', [App\Http\Controllers\AyahController::class, 'store']);
// Route::put('/Ayah/ayah/update/{id}', [App\Http\Controllers\AyahController::class, 'update']);
// Route::delete('/Ayah/ayah/destroy/{id}', [App\Http\Controllers\AyahController::class, 'destroy']);

// // Routing Page Ibu
// Route::get('/Ibu/ibu', [App\Http\Controllers\IbuController::class, 'index']);
// Route::get('/Ibu/ibu/page-update/{id}', [App\Http\Controllers\IbuController::class, 'updateIbu']);
// Route::put('/Ibu/ibu/update/{id}', [App\Http\Controllers\IbuController::class, 'update']);
// Route::delete('/Ibu/ibu/destroy/{id}', [App\Http\Controllers\IbuController::class, 'destroy']);

// // Routing Page Anak
// Route::get('/Anak/anak', [App\Http\Controllers\AnakController::class, 'index']);
// Route::get('/Anak/anak/page-update/{id}', [App\Http\Controllers\AnakController::class, 'updateIbu']);
// Route::put('/Anak/anak/update/{id}', [App\Http\Controllers\AnakController::class, 'update']);
// Route::delete('/Anak/anak/destroy/{id}', [App\Http\Controllers\AnakController::class, 'destroy']);
