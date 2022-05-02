<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', [SiteController::class, 'Home']);

Route::get('/about', [SiteController::class, 'About']);

Route::get('/contact', [SiteController::class, 'Contact']);