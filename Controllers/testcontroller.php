<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Testcontroller extends Controller
{
    
    public function index()
    {
        $flowers= ['Marigold','Rose','lotus'];
        $color= ['Orange','Red','Pink'];
        
       // return view('viewtwo')->with(['flr'=>$flowers, 'clr'=>$color]);    // array of Key value
        return view('viewtwo')->withflr($flowers)->withclr($color);    // chaning
       
    }

   public function showblade()
    {
      
        $data= "using blade syntax";
        $testdata="<script>alert('showing alert message')</script>";
        return view('viewthree')->withdata($data)->withtest($testdata);
    }

    
}
