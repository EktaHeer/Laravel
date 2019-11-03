<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
class Requestcontroller extends Controller
{
    public function index(Request $request)
    {
       // dd($request->name);                                          //(dd)die and dump
       // dd($request->all());                                          //all data information
        //dd($request);                                                 // all type of request 
       // echo $request->name;
        echo $request->get('name', 'name not entered');
        
       
    }

   
}
