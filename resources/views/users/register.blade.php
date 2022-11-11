@extends('layout')

<style>

* {
  box-sizing: border-box;
}

.Rcontainer {
  padding: 16px;
  margin-top: 3%;
  margin-bottom: 1%;
  margin-left: 25%;
  margin-right: 25%;
  background-color: rgba(0, 0, 0, 0.3);
}

.inputC[type=text], .inputC[type=email], .inputC[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.inputC[type=text]:focus, .inputC[type=email]:focus, .inputC[type=password]:focus {
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

<div class="Rcontainer">

    <h1>Register</h1>
    <p>Create an account.</p>
    <hr>



    <!-- name section -->
        <label for="name"> <b> Name </b> </label>
        <input class="inputC"
            type="text"      
            name="name" value="{{old('name')}}" />

        @error('name')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
        @enderror
    

    <!-- email section -->
        <label for="email"> <b>Email <b> </label>
        <input class="inputC"
            type="email"
            name="email" value="{{old('email')}}" />
        
        @error('email')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
        @enderror
    

    <!-- password section -->
        <label for="password"> <b>Password </b> </label>
        <input class="inputC"
            type="password"
            name="password"  value="{{old('password')}}" />

        @error('password')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
         @enderror

    

    <!-- password confirmation section -->
        <label for="password2"> <b>Confirm Password </b> </label>
        <input class="inputC"
            type="password"
            name="password_confirmation"  value="{{old('password_confirmation')}}" />

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1"> {{$message}} </p>
         @enderror

    

    <!-- submit button -->
        <button
            type="submit"
            class="registerbtn"> Sign Up </button>
    

</div>


    <div class="container signin">
        <p style="color: black">Already have an account? <a style="color: #04AA6D" href="/login" class="text-laravel"> Login</a> </p>
    </div>
</form>


 @endsection
