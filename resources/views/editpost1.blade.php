@extends('layouts.layout') 
@section('title', 'Crear nuevo post') 


@section('content')
<br>
<div class="text-center">
  <h1 class="pagetitle">@yield('pagetitle')</h1>
</div>
<form enctype="multipart/form-data" action="{{ route ('editpost', ['post'=> $post]) }}" method="post">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf
  <x-editcard />
    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn card_btn me-4">Guardar</button>
      <a class="btn btn_back" href="{{ route ('posts.index') }}">Volver</a>
    </div>

</form>

@endsection