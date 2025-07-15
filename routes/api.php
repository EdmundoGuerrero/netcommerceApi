<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\TareaController;

Route::get('/companies', [EmpresaController::class, 'index']);
Route::post('/tasks/create', [TareaController::class, 'store']);
