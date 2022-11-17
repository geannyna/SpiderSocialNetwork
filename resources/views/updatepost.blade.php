@extends('layouts.layout') 
@section('title', 'Modificar post') 
@section('pagetitle','Modificar post')  

@section('content')
<br>

<form enctype="multipart/form-data" method="post" action="{{ route ('updatepost', ['post'=> $post]) }}">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf

  <input type="hidden" id="id" name="id" value="{{ $post->id}}">
  {{-- creamos ese campo oculto para pasar el id al controlador y poder modificar info --}}
  <div class="container-fluid d-flex justify-content-center">
    <div class="col col-lg-12 w-75 d-flex">
        <div class="card card-body row d-flex mod_card mt-5">
          <p class="card-title">
            <h3 class="form-label text-center">Post</h3></p>
            <p><input type="text" name="title" id="title" value="{{ $post->title }}" placeholder="Nombre del post" class="form-control" required></p>
          <p class="card-text">
             <textarea class="form-control" id="content" name="content" rows="3" required placeholder="Detalles ...">{{ $post->content }}</textarea></p>
            <div class="mb-3">
              <label for="img" class="form-label">Cargar imagen</label>
              <input class="form-control" type="file" id="img" name="img">
            </div>
        </div>
      </div> 
  </div>

    <div class="d-flex justify-content-center mt-4">
     
      <button type="submit" class="btn card_btn  me-4">Guardar</button> 
     <a class="btn btn_back" href="{{ route ('wall') }}">Volver</a>
    </div>

</form>
 
@endsection