<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
     
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF Token meta de fortify -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/sass/app.scss','resources/js/mijs.js','resources/css/micss.css','resources/js/app.js'])
      
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
        <link rel="icon" href="{{ asset('/img/spider_m1.png') }}">
        <title>@yield('title')</title> 
     
       
    </head>
    <body class="contenido">
        
        @yield('body')  
      
    </body>
</html>