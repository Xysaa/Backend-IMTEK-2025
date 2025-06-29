<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('matkul',[MatkulController::class,'index'])->name('matkul.index');
Route::get('matkul/create',[MatkulController::class,'create'])->name('matkul.create');
Route::post('matkul',[MatkulController::class,'store'])->name('matkul.store');
Route::get('matkul/{matkul}/edit',[MatkulController::class,'edit'])->name('matkul.edit');
Route::put('matkul/{matkul}',[MatkulController::class,'update'])->name('matkul.update');
Route::delete('matkul/{matkul}',[MatkulController::class, 'destroy'])->name('matkul.destroy');
