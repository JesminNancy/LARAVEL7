<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    function showHome(){
    
        // $Data = array("Bangladesh", "India", "Canada", "America", "London");
        $Data= array();
        return view('Home', ['dataKey'=>$Data]);
    }
}
