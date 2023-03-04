@extends('layouts.layout') 
@section('title', 'Crear persona') 
@section('pagetitle','Crear persona')  

@section('content')
<br>

<form enctype="multipart/form-data" method="post" action="{{ route ('people.store') }}">
  {{-- form type="text/html" --este ya no sirve cuando hay que mandar una imagen a la BD --}}
  @csrf

  {{-- <input type="hidden" id="id" name="id" value="{{ $post->id}}"> --}}
  {{-- creamos ese campo oculto para pasar el id al controlador y poder modificar info --}}
  <div class="container-fluid d-flex justify-content-center">
    <div class="col col-lg-12 w-75 d-flex">
        <div class="card card-body row d-flex mod_card mt-5">
          <p class="card-title">
            <h3 class="form-label text-center">Nueva Persona</h3></p>
          <p><input type="text" name="name" id="name" placeholder="Nombre " value="{{ old('name') }}" class="form-control" required></p>

          {{-- grupo al que pertenece --}}
          {{-- <div class="mb-3">
            <label for="group_id" class="form-label">Grupo en el que se piblicará</label>
              <select class="form-control" name="group_id" id="group_id" value="{{ old('group_id') }}" required>
                @foreach ($groups as $group)
                  <option value="{{$group->id }}">{{$group->title}}</option>
                @endforeach
              </select>
          </div> --}}
          <p class="card-text">
             <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required></p>
        
              <div class="pb-2">
                  <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

            <div class="mb-3">
              @if (isset($errors))
                @foreach ($errors->all() as $error )
                  <span class="text-danger">{{ $error }} </span>
                @endforeach
              @endif
            </div>
        </div>
      </div> 
      @auth
        <input type="hidden" name="user_id" value=" {{ Auth::user()->id }} ">
      @endauth 
      {{-- ese campo tiene que estar dentro del form --}}
  </div>

    <div class="d-flex justify-content-center mt-4">
      <button type="submit" class="btn card_btn  me-4">Guardar</button> 
     <a class="btn btn_back" href="{{ route ('posts.index') }}">Volver</a>
    </div>

</form>
 
@endsection