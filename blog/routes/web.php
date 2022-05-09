<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParameterController;

Route::get('/', [SiteController::class, 'Home']);

Route::get('/about', [SiteController::class, 'About']);

Route::get('/contact', [SiteController::class, 'Contact']);

Route::get('/name/{namevalue}', [ParameterController::class, 'MyName']);