@extends('layout')


@section('content')

<p class="pageTitle">Resume of {{str_replace('_',' ', $devName)}}</p>

<div style="display: flex; justify-content: center; align-items: center; text-align: center; min-height: 100vh;">
    <object data={{asset("images/CVs/$devName.pdf")}} width="1000" height="1000"></object>
</div>


@endsection