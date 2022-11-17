
@extends('layouts.app')
@section('body')

             <nav class="navbar navbar_head navbar-expand-lg fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route ('home')}}"><img src="{{ asset ('/img/spider_m1.png')}}" height="30"></a>
                  <a class="navbar-brand" href="{{ route ('home')}}"><h3 class="text-center">Spider</h3></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span>               
                       <img src="{{ asset ('/img/menu.png')}}"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item nav_letra text-light">
                        <a class="nav-link active " aria-current="page" href="{{ route ('wall')}}">Muro</a>
                      </li>
                      <li class="nav-item nav_letra">
                         <a class="nav-link" href="{{ route ('people')}}">Personas</a> 
                      </li>
                      <li class="nav-item nav_letra">
                       <a class="nav-link" href="{{ route ('contact')}}">Contacto</a>
                      </li>
                      <li class="nav-item nav_letra" >
                        <a class="nav-link" href="{{ route ('aboutus')}}">Acerca de</a>
                      </li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control me-2 btn_buscar" type="search" placeholder="Buscar..." aria-label="Buscar">
                      <button class="btn btn_buscar" type="submit">Buscar</button>
                    </form>
                  </div>
                </div>
              </nav> 
              

        {{--  <x-flash /> llamamos a flash.blade.php para hacer que el mensaje de comprobacion desaparezca --}}         
    
           <div class="container-fluid">
               {{-- @yield('pagetitle') --}}
                @yield('content') 
              
                  @isset($code)
                      <x-flash-message code="{{$code}}" message="{{$message}}"/>
                  @endisset ()
              
          </div> 
          
        <br>
    {{-- <x-message type="secondary" message='  --- mensaje layout.blade ---  '/> --}}
   {{--   llamamos al componente message.blade.php  para que no se vea de momento--}}

    <div class="container-fluid">
      <nav class="navbar navbar_footer navbar-expand-lg fixed-bottom">  
        <p class="w-100 text-center fw-bold"> &copy; 2022, Spider Social Network 
        <a href=""><img class="btn_up me-4" src="{{ asset ('/img/up.png')}}" alt=""></a>
         </p>
        
      </nav>  
     
    </div>
</div>
@endsection  