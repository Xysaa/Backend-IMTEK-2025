<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('matkul',[MatkulController::class,'index'])->name('matkul.index');
Route::get('matkul/create',[MatkulController::class,'create'])->name('matkul.create');
Route::post('matkul',[MatkulController::class,'store'])->name('matkul.store');
Route::get('matkul/{matkul}/edit',[MatkulController::class,'edit'])->name('matkul.edit');
Route::put('matkul/{matkul}',[MatkulController::class,'update'])->name('matkul.update');
Route::delete('matkul/{matkul}',[MatkulController::class, 'destroy'])->name('matkul.destroy');



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('matkul', MatkulController::class);
    Route::resource('kelas', KelasController::class);
});



Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
