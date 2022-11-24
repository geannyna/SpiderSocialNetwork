@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Wall') 

@section('content')
<div class="container-fluid">
    
<div class="text-center">
    <h1 class="mt-5">@yield('pagetitle')</h1>
</div>


    <div class="row-cols-1 g-4 pt-5">
        @foreach ($posts as $post )

            <x-card title="{{$post->title}}"
                content="{{$post->content}}"
                img="{{$post->img}}"
                link="{{ route ('post', ['post'=> $post]) }}">
            </x-card>

        @endforeach
    </div>
</div>
<br>
 
@auth
     <div class="container-fluid">
    <p class="text-center">
      <a class="btn card_btn" href="{{ route ('newpost') }}">Crear nuevo post</a></p>
   </div>
   @else
    <div class="d-flex justify-content-center mt-4 nav_letra">
        Sólo los usuarios registrados pueden crear posts.
        <a class="nav-link ms-1" href="{{route('logout')}} ">salir</a>
    </div>
    <div class="d-flex justify-content-center mt-4 nav_letra">
       Entra <a class="nav-link ms-1 me-1 wall_letra" href="{{route('login')}} ">aqui </a>o<a class="nav-link ms-1 wall_letra" href="{{route('register')}} ">registrate.</a>
        
    </div>
@endauth


@endsection