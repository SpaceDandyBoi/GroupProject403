@extends('layout')

<style>

* {
  box-sizing: border-box;
}

.container {
  padding: 16px;
  margin-top: 3%;
  margin-bottom: 1%;
  margin-left: 25%;
  margin-right: 25%;
  background-color: rgba(0, 0, 0, 0.3);
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


<form method="POST" action="/users/authenticate">
    @csrf

<div class="container">

    <h1>Login</h1>
    <p>Log into your account.</p>
    <hr>

    

    <!-- email section -->
        <label for="email"> <b>Email <b> </label>
        <input
            type="email"
            placeholder="enter your email"
            name="email"  value="{{old('email')}}" />
        
        @error('email')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
        @enderror
    

    <!-- password section -->
        <label for="password"> <b>Password </b> </label>
        <input
            type="password"
            placeholder="enter your password"
            name="password" value="{{old('password')}}" />

        @error('password')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
         @enderror
    

    <!-- submit button -->
        <button
            type="submit"
            class="registerbtn"> Sign In </button>
    

</div>


    <div class="container signin">
        <p style="color: black">Don't have an account? <a style="color: #04AA6D" href="/register" class="text-laravel"> Register</a> </p>
    </div>
</form>


 @endsection
