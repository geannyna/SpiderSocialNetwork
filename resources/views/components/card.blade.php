

    {{-- <div class="row">
      <div class="card mi_card mt-3 col-md-6">
        @if ($img != '')
          <img src="{{$img}}" class="card-img-top card_img" alt="{{ $title }}">
        @endif {{-- si no hay imagen no aparece nada --}}

      {{-- <div class="card-body col-md-6">
          <h5 class="card-title text-center">{{ $title }}</h5>
          <p class="card-text">{{ $content}}</p>
          
          @if ( isset ($author) && ($author != ''))
        <p class="card-text">Creado por: {{ $author }}</p>
        @endif  

        @isset($group)
        <p class="card-text">Publicado en: {{ $group }}</p>
        @endisset --}}

      {{--  @isset($author)
        <p class="card-text">Creado por: {{ $author }}</p>
        @endisset 
          no funciona el isset para poner el autor de la card --}}
        {{-- </div>  
          
        @if ($link != '')
          <p class="text-center mt-auto"><a class="btn card_btn" href="{{ $link }}">{{((isset($linkTxt))? $linkTxt : "Ver más")}}</a></p>
        @endif
    
      </div>
   
  </div> --}}
{{-- ------------------------- --}}
<div class="row d-flex justify-content-center">
  <div class="card mi_card mb-3" style="width: 80%;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{$img}}" class="img-fluid card_img" alt="">
      </div>
      <div class="col-md-8">
        <div class="card-body m-0 p-0">
          <h5 class="card-title text-center">{{ $title }}</h5>
          <p class="card-text pb-0 mb-0">{{ $content}}</p>
          
          @if ( isset ($author) && ($author != ''))
        <p class="card-text">Creado por: {{ $author }}</p>
        @endif  

        @isset($group)
        <p class="card-text">Publicado en: {{ $group }}</p>
        @endisset
        </div>
        @if ($link != '')
        <p class="text-center mt-auto"><a class="btn card_btn" href="{{ $link }}">{{((isset($linkTxt))? $linkTxt : "Ver más")}}</a></p>
      @endif
      </div>
    </div>
  </div>
</div>