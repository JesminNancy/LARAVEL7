<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParameterController extends Controller
{
    function MyName($namevalue){
    
        return $namevalue;
    
    }
    
    // Basic Routing With Multiple Parameter
    // function Name($firstName,$middleName,$lastName,$age){
    
    //     return "First Name: " .$firstName . "<br>Middle Name: ".$middleName . "<br> Last Name: ". $lastName. "<br> My Age: ".$age;
    
    // }
    
     // Basic Routing Parameter Controller To View
     
    function Name($firstName,$middleName,$lastName,$age){
    
     return view('DemoPage', ['firstname'=>$firstName, 'middlename'=>$middleName, 'lastname'=>$lastName, 'age'=>$age]);
    
    }
}
