@extends('layout/master')
   

   @section('body')
   
    <h1>Send Data on view using blade syntax</h1>
<h2>          
     
  {{$test}}                                           <!--  using blade syntax: not run the script -->
    
</h2>
<!--   <?php echo $test; ?>  -->                                  <!--     using PHP syntax -->
    
  @{{$test}}                      <!-- to tell Laravel this is not the part of laravel. -->
    
    {!! $test !!}                                        <!--     run the script -->
  
@endsection
