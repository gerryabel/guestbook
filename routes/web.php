<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestbookController;

Route::get('/', [GuestbookController::class, 'index']);
Route::post('/store', [GuestbookController::class, 'store']);
