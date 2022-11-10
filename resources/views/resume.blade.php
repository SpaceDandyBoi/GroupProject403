@extends('layout')


@section('content')

<div>
    <p class="pageTitle">Resume of {{str_replace('_',' ', $devName)}}</p>
</div>

<div style="display: flex; justify-content: center; align-items: center; text-align: center; min-height: 100vh" >
    <object data='{{asset("images/CVs/$devName.pdf")}}' type="application/pdf" width="1000" height="1000"></object>
</div>


@endsection