<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    function showHome(){
    
        $newsHeadline= "<h1>Bangladesh</h1>";
        return view('Home',['newsHeadlinekey'=>$newsHeadline]);
    }
}
