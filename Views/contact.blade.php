@if($errors->any())

 @foreach($errors->all() as $error)
 <li> {{ $error }}</li>
 @endforeach
 @endif
  

  <form action="{{route('contactstore')}}" method="post">
   
   {{csrf_field()}}
    <label for="Name">Name:</label>
    <input type="text" name="name"> 
    <label for="Email">Email:</label>
    <input type="email" name="email">
    <input type="submit">
</form>