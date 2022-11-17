@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Ver Post') 

@section('content')

<div class="text-center">
    <h1 class="mt-5">@yield('pagetitle')</h1>
</div>

<x-card title="{{$post->title}}"
    content="{{$post->content}}"
    img="{{$post->img}}" text>
</x-card>
   {{-- (habia text al final)--}}

   <br>
<div class="d-flex justify-content-center">
   <a class="btn card_btn me-3" href="{{ route ('editpost',['post' => $post]) }}">Modificar</a>

   <form method="post" action="{{ url ('/deletepost')}}">
       @csrf
       <input type="hidden" name="id" id="id" value="{{$post->id}}">
       <button type="submit" class="btn btn_delete me-3">Eliminar</button>
   </form>

   <a class="btn btn_back" href="{{ route ('wall') }}">Volver</a>
</div>


@yield('footer') 


@endsection