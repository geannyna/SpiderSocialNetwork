@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Ver Post') 

@section('content')

<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>

<x-card title="{{$post->title}}"
    content="{{$post->content}}"
    img="{{$post->img}}"
    author="{{ $post->user->name }}"
    group="{{ $post->group->title }}">
</x-card>
   {{-- (habia text al final)--}}

   <br>
<div class="d-flex justify-content-center">
    @if (Auth::user()->id == $post->user->id)
        
   
   <a class="btn card_btn me-3" href="{{ route ('posts.edit',['post' => $post]) }}">Modificar</a>

   <form method="post" action="{{ route ('posts.destroy',['post' => $post])}}">
       @csrf
       @method('delete')
       {{-- <input type="hidden" name="id" id="id" value="{{$post->id}}"> --}}
       <button type="submit" class="btn btn_delete me-3">Eliminar</button>
   </form>
 @endif
   <a class="btn btn_back" href="{{ route ('posts.index') }}">Volver</a>
</div>


{{-- @yield('footer')  --}}


@endsection