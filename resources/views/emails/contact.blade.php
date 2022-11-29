

<div class="marco">
  <h1>Mensaje de {{ $name }}</h1>
  <h4 class="text-center">Con email: {{ $email }} </h4>
  <p> Ha comentado: <br>{{ $description }}</p>
</div>
{{-- con el componente cambiamos la forma en la que se ve el mensaje --}}
  <style>
    .marco, .h4, p{
      width: 80%;
      height: auto;
      margin: auto;
      background-color: #f2dffc;
      color:#7623a2;
      padding: 10px;
    }
   
  
  @media only screen and (max-width: 600px){
    .marco{
      width: 90%;
    }
    @media only screen and (max-width: 900px){
    .marco{
      width: 90%;
    }
  }
  </style>

