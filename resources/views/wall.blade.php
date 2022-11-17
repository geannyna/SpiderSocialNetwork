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
 

 <div class="container-fluid">
    <p class="text-center">
      <a class="btn card_btn" href="{{ route ('newpost') }}">Crear nuevo post</a></p>
   </div>
@endsection