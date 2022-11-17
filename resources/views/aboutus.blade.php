@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','About us') 

@section('content')

  
    <div class="text-center">
        <h1 class="pagetitle">@yield('pagetitle')</h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div>
            <img class="about_img mt-5" src="{{ asset ('/img/network.jpg')}}">
        </div>

    </div>

@endsection