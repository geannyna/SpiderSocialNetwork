@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Personas') 

@section('content')
    
<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>

    <div class="row-cols-1 g-4 pt-5">
        @foreach ($people as $person )

            <x-card title="{{$person->name}}"
                content="{{$person->email}}"
                link="{{ route ('people.show', ['person'=> $person->id]) }}">
            </x-card>

        @endforeach
    </div>

<br>
