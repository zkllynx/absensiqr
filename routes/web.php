<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;

Route::get('/', [siswaController::class, 'index']);
            