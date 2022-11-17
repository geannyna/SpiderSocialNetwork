@props(['text','auxiliar'])

<div class="container-fluid d-flex justify-content-center w-75">
  <div class="col d-flex">
      <div class="card mod_card card-body d-flex row">
        <p class="card-title">
          <h3 class="form-label text-center w-75 ps-5 ms-3">Nuevo Post </h3>
        </p>

          <p><input type="text" name="title" id="title" value="{{ old ('title')}}" placeholder="Nombre del post" class="form-control @error('title')
              border-danger
            @enderror"></p>
            @error('title')
              <p class="text-danger"><b>{{$errors->first('title')}}</b></p>
            @enderror

        <p class="card-text">
           <textarea class="form-control @error('content')
           border-danger
         @enderror" id="content" name="content" rows="3" placeholder="Detalles ...">{{ old ('content')}}</textarea>
        </p>
          @error('content')
            <p class="text-danger"><b>{{$errors->first('content')}}</b> </p>
          @enderror  
          <div class="mb-3">
            <label for="img" class="form-label">Cargar imagen</label>
            <input class="form-control" type="file" id="img" name="img" value="img" class="form-control">
          </div>

          {{-- <div class="mb-3">
            @if (isset($errors))
              @foreach ( $errors->all() as $error)
                <span class="text-danger">{{ $error }}</span>
              @endforeach
            @endif
          </div> --}}
      </div>
    </div> 
</div>