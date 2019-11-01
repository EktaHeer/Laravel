@extends('layout/master')
   

   @section('body')
   
    <h1>Conditional coding using blade syntax in Laravel</h1>
          
<!--           {{$data or 'No data'}}    -->
           
           <?php $no = "There is nothing."; ?>
           
           @if($data == "data1")                               // conditional statement in blade
              {{$data}}    
           @elseif($data == "data2")
              {{$data}}
           @else
              {{$no}}
           @endif       
  
@endsection