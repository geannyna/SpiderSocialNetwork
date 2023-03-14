@extends('layouts.layout') 
@section('title', 'Crear grupo') 
@section('pagetitle','Crear grupo')  

@section('content')
<br>

<form enctype="multipart/form-data" method="post" action="{{ route ('groups.store') }}">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf

  {{-- <input type="hidden" id="id" name="id" value="{{ $post->id}}"> --}}
  {{-- creamos ese campo oculto para pasar el id al controlador y poder modificar info --}}
  <div class="container-fluid d-flex justify-content-center">
    <div class="col col-lg-12 w-75 d-flex">
        <div class="card card-body row d-flex mod_card mt-5">
          <p class="card-title">
            <h3 class="form-label text-center pagetitle mt-0">Nuevo grupo</h3></p>
          <p><input type="text" name="title" id="title" placeholder="Nombre del grupo" value="{{ old('title') }}" class="form-control" required></p>
          <p class="card-text">
             <textarea class="form-control" id="description" name="description" rows="3"  placeholder="Detalles ..." required>{{ old('description') }}</textarea></p>
            {{-- <div class="mb-3">
                  <label for="img" class="form-label">Cargar imagen</label>
                  <input class="form-control" type="file" id="img" name="img">
            </div> --}}

            <div class="mb-3">
              @if (isset($errors))
                @foreach ($errors->all() as $error )
                  <span class="text-danger">{{ $error }} </span>
                @endforeach
              @endif
            </div>
        </div>
      </div> 
  </div>

    <div class="d-flex justify-content-center mt-4">

      <div>
        @auth
          <button type="submit" class="btn card_btn  me-4">Guardar</button> 
          @else
          {{-- <div class="d-flex justify-content-center mt-4 nav_letra">
            Sólo los usuarios registrados pueden crear grupos.
        </div> --}}
        @endauth

      </div>
      
     <a class="btn btn_back" href="{{ route ('groups.index') }}">Volver</a>
    </div>

</form>
 
@endsection