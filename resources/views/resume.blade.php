@extends('layout')


@section('content')

<p class="pageTitle">Resume of {{str_replace('_',' ', $devName)}}</p>

<div style="margin-left:20%;">
    <object data={{asset("images/CVs/$devName.pdf")}} width="1000" height="1000"></object>
</div>


@endsection