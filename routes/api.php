<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;

Route::apiResource('/matkuls', MatkulController::class);
