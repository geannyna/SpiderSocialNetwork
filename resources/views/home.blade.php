@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Welcome to Spider Network') 

@section('content')
<div class="container-fluid container-md row d-flex">
    
<div class="text-center">
    <h1 class="pagetitle">@yield('pagetitle')</h1>
    </div>
    <div class="container-fluid d-flex justify-content-center">
   
    {{-- <img class="home_img mt-5" src="{{ asset ('/img/network_home.png')}}"> --}}
   
    {{--  login de fortify--}}
    <div class="card home_img mt-5">
        <div class="card_header mt-5 ms-3 nav_letra text-center">{{ __('Bienvenido/a') }}</div>

        <div class="card-body ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        <div class="nav_letra text-center">
            {{ __('Ya estas conectado!') }}
        </div>
        </div>
    </div>
</div>
<br>

 </div>

@endsection