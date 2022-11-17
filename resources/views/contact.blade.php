@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Contact') 

@section('content')

<div class="container-fluid mi_form">
  <div class="row d-flex" >
 <div class="col-12 col-lg-12 w-100">
  <form action="" method="post" class="w-100">
      @csrf   {{--  componente de seguridad cuando tenemos post, hay que ponerlo siempre para el post --}}
  <div class="text-center">
    <h1 class="pagetitle mt-0">@yield('pagetitle')</h1>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label" >Tu nombre</label>
      <input type="text" class="form-control" id="name" name="name" placeholder="Introduce tu nombre" required>
      
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@email.com" required> 
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Tu consulta</label>
      <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="d-flex justify-content-center">
      <button type="submit" class="btn btn_back">Enviar consulta</button>
    </div>
  
  </form>
</div>
</div>
</div>

@if($codigo = Session::get('code'))
<div id='flashMsg' class="flashMsg text-center p-2 mt-4">
  {{ $codigo }} - {{ Session::get ('message') }}
</div>
@endif

@endsection
