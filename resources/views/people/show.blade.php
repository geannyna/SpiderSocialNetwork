@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Ver Persona') 

@section('content')

<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>

<x-card title="{{$person->name}}"
    content="{{$person->email}}"
    link="{{ route ('posts.filterByUser',$person)}}" 
    linkTxt="Ver posts">
</x-card>
   {{-- (habia text al final)--}}

   <br>
<div class="d-flex justify-content-center">
  <script>
      function confirmarBorrar(){
        return (confirm('¿Estas seguro que quieres borrar persona?'));
      }
  </script>
  <div class="d-flex justify-content-center">
    {{-- @if (Auth::user()->id == $post->user->id) --}}
        
   
   <a class="btn card_btn me-3" href="{{ route ('people.edit',['person' => $person]) }}">Modificar</a>

   <form method="post" action="{{ route ('people.destroy',['person' => $person])}}" onsubmit="confirmarBorrar()">
       @csrf
       @method('delete')
       {{-- <input type="hidden" name="id" id="id" value="{{$post->id}}"> --}}
       <button type="submit" class="btn btn_delete me-3">Eliminar</button>
   </form>
 {{-- @endif --}}
   <a class="btn btn_back" href="{{ route ('people.index') }}">Volver</a>
</div>
</div>

@endsection