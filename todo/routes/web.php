<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index']);

Route::post('/tambah-tugas', [TodoController::class, 'store']);

Route::delete('/hapus-tugas', [TodoController::class, 'destroy']);
