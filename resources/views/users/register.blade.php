@extends('layout')

<style>

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  background-color: white;
}

input[type=text], input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}

</style>    


@section('content')


<form method="POST" action="/users">
    @csrf

<div class="container">

    <h1>Register</h1>
    <p>Create an account.</p>
    <hr>



    <!-- name section -->
        <label for="name"> <b> Name </b> </label>
        <input
            type="text" 
            placeholder="enter your name"          
            name="name"  />

        @error('name')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
        @enderror
    

    <!-- email section -->
        <label for="email"> <b>Email <b> </label>
        <input
            type="email"
            placeholder="enter your email"
            name="email"  />
        
        @error('email')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
        @enderror
    

    <!-- password section -->
        <label for="password"> <b>Password </b> </label>
        <input
            type="password"
            placeholder="enter your password"
            name="password"  />

        @error('password')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
         @enderror

    

    <!-- password confirmation section -->
        <label for="password2"> <b>Confirm Password </b> </label>
        <input
            type="password"
            placeholder="please confirm your password"
            name="password_confirmation"  />

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
         @enderror

    

    <!-- submit button -->
        <button
            type="submit"
            class="registerbtn"> Sign Up </button>
    

</div>


    <div class="container signin">
        <p>Already have an account? <a href="/login" class="text-laravel"> Login</a> </p>
    </div>
</form>


 @endsection
