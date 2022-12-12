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
        return (confirm('¿Estas seguro que quieres borrar el grupo?'));
      }
  </script>

   <a class="btn btn_back" href="{{ route ('people.index') }}">Volver</a>
</div>

@endsection