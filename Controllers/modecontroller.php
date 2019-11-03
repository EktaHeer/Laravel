<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
class Modecontroller extends Controller
{
    
    public function index()
    {
           
//       $student = new Student;                             
//        $student->sname = "Ansh";
//        $student->standard = 6;
        
        $student = new Student(['sname' => 'disha', 'standard' => '12']);         // using constructor
        $student = new Teacher(['sname' => 'diksha', 'standard' => '10']);         // using constructor
        
        
        $student->save();
        
       return view('hello'); 
    }
    
    }


