@extends('layouts.layout') 
@section('title', 'Modificar grupo') 
@section('pagetitle','Modificar grupo')  

@section('content')
<br>

<form enctype="multipart/form-data" method="post" action="{{ route ('groups.update', ['group'=> $group]) }}">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf
   @method('put') {{-- esto porque no accepta el metodo post --}}
  <input type="hidden" id="id" name="id" value="{{ $group->id}}">
  {{-- creamos ese campo oculto para pasar el id al controlador y poder modificar info --}}
  <div class="container-fluid d-flex justify-content-center">
    <div class="col col-lg-12 d-flex w-50">
        <div class="card card-body row d-flex mod_card mt-5">
          <p class="card-title">
            <h3 class="form-label text-center pagetitle mt-0">Grupo</h3></p>
            <p><input type="text" name="title" id="title" value="{{ $group->title }}" placeholder="Nombre del grupo" class="form-control" required></p>
          <p class="card-text">
             <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Detalles ...">{{ $group->description }}</textarea></p>
            {{-- <div class="mb-3">
              <label for="img" class="form-label">Cargar imagen</label>
              <input class="form-control" type="file" id="img" name="img">
            </div> --}}
        </div>
      </div> 
  </div>

    <div class="d-flex justify-content-center mt-4">
     
      <button type="submit" class="btn card_btn  me-4">Guardar</button> 
     <a class="btn btn_back" href="{{ route ('groups.index') }}">Volver</a>
    </div>

</form>
 
@endsection