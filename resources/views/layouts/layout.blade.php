
@extends('layouts.app')
@section('body')

             <nav class="navbar navbar_head navbar-expand-lg fixed-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="{{ route ('home')}}"><img src="{{ asset ('/img/spider_m1.png')}}" height="30"></a>
                  <a class="navbar-brand" href="{{ route ('home')}}"><h2 class="text-center nav_spider">Spider</h2></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span>               
                       <img src="{{ asset ('/img/menu.png')}}"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link mi_letra" href="{{ route ('posts.index')}}">Muro</a> 
                     </li>
                     <li class="nav-item">
                      <a class="nav-link mi_letra" href="{{ route ('groups.index')}}">Grupos</a> 
                   </li>
                      <li class="nav-item">
                         <a class="nav-link mi_letra" href="{{ route ('people')}}">Personas</a> 
                      </li>
                      <li class="nav-item">
                       <a class="nav-link mi_letra" href="{{ route ('contact')}}">Contacto</a>
                      </li>
                      <li class="nav-item" >
                        <a class="nav-link mi_letra" href="{{ route ('aboutus')}}">Acerca de</a>
                      </li>
                    </ul>
                 <!-- Right Side Of Navbar -->
                     <!-- Right Side Of Navbar -->
                     <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link mi_letra" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link mi_letra" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle mi_letra" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item mi_letra" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                     
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>

                  </div>
                </div>
              </nav> 
              
            {{--  ¿No tienes una cuenta? Regístrate
          <x-flash /> llamamos a flash.blade.php para hacer que el mensaje de comprobacion desaparezca --}}         
    
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
        <p class="w-100 text-center mi_letra"> &copy; 2022, Spider Social Network 
        <a href=""><img class="btn_up me-4" src="{{ asset ('/img/up.png')}}" alt=""></a>
        </p>
      
      </nav>  
     
    </div>
</div>
@endsection  