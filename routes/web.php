<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolesController;

Route::get('/', [rolesController::class, 'index']);
            