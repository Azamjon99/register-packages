
<html lang="en">
    <head>
    </head>
    <body>
      <style>
          body{
  background: #ffece5;
  font-family: verdana;
}
.new-user{
  background: #fff;
  padding: 20px 40px;
  max-width: 300px;
  margin: 0 auto;
}
h2{
  color: #555;
}
label,input{
  display: block;
  margin: 18px 0;
}
label{
  color: #777;
}
input[type='text'],
input[type='email'],
input[type='password']

{
  border: 1px solid #ddd;
  padding: 10px;
  border-radius: 10px;
  width: 100%;
}
input[type='submit']{
  margin: 24px auto;
  font-size: 18px;
  background: coral;
  color: #fff;
  padding: 6px 16px;
  border: none;
  border-radius: 10px;
}
      </style>
      
@if(count($errors)>0)
<ul>
@foreach($errors->all() as $error)



<li class="alert alert-danger">{{$error}}</li>
@endforeach

</ul>
   @endif

      <div class="new-user">
        <h2 style="text-align: center">Create a new user</h2>
      <form action="{{route('register')}}" method="POST">
    @csrf
          <label>username: </label>
          <input type="text" name="name">
    
          <label>email: </label>
          <input type="text" name="email">
     
         
    
          <label>parol: </label>
          <input type="password" name="parol">
    
          <input type="submit" value="submit" name="submit">
      
        </form>
      </div>
    
    </body>
    </html>