@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Welcome to Spider Network') 

@section('content')
<div class="container-fluid container-md row d-flex">
    
<div class="text-center">
    <h1 class="pagetitle">@yield('pagetitle')</h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
   
    <img class="home_img mt-5" src="{{ asset ('/img/network_home.png')}}">
    {{-- <div>
    <img class="ps-5 ms-5" src="{{ asset ('/img/spider-dont-starve.gif')}}">
    </div> --}}
</div>
<br>

 </div>

@endsection