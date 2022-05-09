<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    function MyName($namevalue){
    
        return $namevalue;
    
    }
}
