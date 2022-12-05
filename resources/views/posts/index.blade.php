@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Posts') 

@section('content')
<div class="container-fluid">
    
<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>


    <div class="row-cols-1 g-4 pt-5">
        @foreach ($posts as $post )

            <x-card title="{{$post->title}}"
                content="{{$post->content}}"
                img="{{$post->img}}"
                link="{{ route ('posts.show', ['post'=> $post]) }}">
            </x-card>

        @endforeach
    </div>
</div>
<br>
 
@auth
    
    <p class="text-center">
      <a class="btn nuevo_btn" href="{{ route ('posts.create') }}">Crear nuevo post</a></p>
   </div>
   @else
    <div class="d-flex justify-content-center mt-4 nav_letra">
        Sólo los usuarios registrados pueden crear posts.
    </div>
    <div class="d-flex justify-content-center mt-4 nav_letra">
       Entra <a class="nav-link ms-1 me-1 wall_letra" href="{{route('login')}} ">aqui </a>o<a class="nav-link ms-1 wall_letra" href="{{route('register')}} ">registrate.</a>
        
   
@endauth


@endsection