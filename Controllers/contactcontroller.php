<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Contactcontroller extends Controller
{
    
    public function index()
    {
       return view('contact');
    }

    public function store(Request $request)
    {
       //dd($request->all());                             // print all data 
    $this->validate($request,['email'=>'required|email']);             // add validation to email field
//  $this->validate($request,['email'=>'required|email'],       // show custom message using local technique (only for contact controller)
//                  
//                  [
//                      'email.required' => 'Email cannot be empty.',
//                      'email' => 'Email format is not valid'
//                      
//                  ]);             
      
    }

}
