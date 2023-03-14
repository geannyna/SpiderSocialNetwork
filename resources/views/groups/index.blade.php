@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Grupos') 

@section('content')
<div class="container-fluid">
    
<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>


    <div class="row-cols-1 g-4 pt-5">
        @foreach ($groups as $group )

            <x-card title="{{$group->title}}"
                content="{{$group->description}}"
                link="{{ route ('groups.show', ['group'=> $group->id]) }}">
            </x-card>

        @endforeach
    </div>
</div>
<br>
 
@auth
     <div class="container-fluid">
    <p class="text-center">
      <a class="btn nuevo_btn" href="{{ route ('groups.create') }}">Crear nuevo grupo</a></p>
   </div>
   @else
    {{-- <div class="d-flex justify-content-center mt-4 nav_letra">
        Sólo los usuarios registrados pueden crear grupos.
    </div>
    <div class="d-flex justify-content-center mt-4 nav_letra">
       Entra <a class="nav-link ms-1 me-1 wall_letra" href="{{route('login')}} ">aqui </a>o<a class="nav-link ms-1 wall_letra" href="{{route('register')}} ">registrate.</a>
        
    </div> --}}
@endauth