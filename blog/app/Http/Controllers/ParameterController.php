<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    function MyName($namevalue){
    
        return $namevalue;
    
    }
    
    function Name($firstName,$middleName,$lastName,$age){
    
        return "First Name: " .$firstName . "<br>Middle Name: ".$middleName . "<br> Last Name: ". $lastName. "<br> My Age: ".$age;
    
    }
}
