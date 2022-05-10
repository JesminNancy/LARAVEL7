<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\MyController;

// 	Basic Routing With Controller And View 
Route::get('/', [SiteController::class, 'Home']);

Route::get('/about', [SiteController::class, 'About']);

Route::get('/contact', [SiteController::class, 'Contact']);

//Basic Routing With Parameter
Route::get('/name/{namevalue}', [ParameterController::class, 'MyName']);

//Basic Routing With Multiple Parameter
Route::get('/name/{firstName}/{middleName}/{lastName}/{age}', [ParameterController::class, 'Name']);

//Basic Routing Group

Route::group(['prefix'=>'account'], function(){

  Route::get('/profile', function(){
  
     return "Profile";
    
  });
  Route::get('/login', function(){
  
    return "Login";
  });
  Route::get('/signup', function(){
  
    return "SignUp";
    
  });
  Route::get('/updateprofile', function(){
  
    return "UpdateProfile";
    
  });
  Route::get('/logout', function(){
  
    return "Logout";
    
  });

});

//Single Action Controller
Route::get('/singleaction', MyController::class);

