<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\MahasiswaController;


Route::apiResource('/matkuls', MatkulController::class);

Route::prefix('mahasiswa')->group(function(){
    Route::get('/', [MahasiswaController::class, 'tampil']); 
    Route::post('/', [MahasiswaController::class, 'submit']);
    Route::get('/{id}', [MahasiswaController::class, 'edit']); 
    Route::put('/{id}', [MahasiswaController::class, 'update']);
    Route::patch('/{id}', [MahasiswaController::class, 'update']); 
    Route::delete('/{id}', [MahasiswaController::class, 'delete']); 
});