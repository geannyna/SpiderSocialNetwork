

    <div class="col d-flex justify-content-center">
      <div class="card mi_card mt-3">
        @if ($img != '')
          <img src="{{$img}}" class="card-img-top card_img" alt="{{ $title }}">
        @endif {{-- si no hay imagen no aparece nada --}}

        <div class="card-body d-flex row">
          <h5 class="card-title text-center">{{ $title }}</h5>
          <p class="card-text">{{ $content}}</p>
          
          @if ( isset ($author) && ($author != ''))
        <p class="card-text">Creado por: {{ $author }}</p>
        @endif  

        @isset($group)
        <p class="card-text">Publicado en: {{ $group }}</p>
        @endisset 
       {{--  @isset($author)
        <p class="card-text">Creado por: {{ $author }}</p>
        @endisset 
         no funciona el isset para poner el autor de la card --}}
        </div>  
          
        @if ($link != '')
          <p class="text-center mt-auto"><a class="btn card_btn" href="{{ $link }}">Ver más</a></p>
        @endif
    
      </div>
   
  </div>