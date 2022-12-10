@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Welcome to Spider Network') 

@section('content')
<div class="row d-flex">
    
<div class="text-center">
    <h1 class="pagetitle">@yield('pagetitle')</h1>
</div>

<div class="d-flex justify-content-center">
   {{--  login de fortify--}}
    <div class="card home_card mt-4">
        <div class="mt-5 nav_letra text-center">
            @if (isset(Auth::user()->name))
            <div class="nav_letra text-center">
                {{ __('Hola ') }} {{ Auth::user()->name }}
                 <p>   {{ __('Ya estamos conectados!') }}</p>
                </div>
                @else
                <img class="home_img" src="{{ asset ('/img/network.jpg')}}">
             @endif{{--{{ Auth::user()->name }} --}}
            </div>
        <div class="card-body ">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
              
            @endif
       
        <form id="logout-form" method="post" action="{{ route('logout') }}" class="d-none">
            @csrf
            
        </form>
        </div>
    </div>
</div>
 </div>

@endsection