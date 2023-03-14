@extends('layouts.layout') 
@section('title', 'Spider Social Network') 
@section('pagetitle','Ver Grupo') 

@section('content')

<div class="text-center">
    <h1 class="pagetitle mt-5">@yield('pagetitle')</h1>
</div>

   {{-- (habia text al final)--}}

   <br>
<div class="d-flex justify-content-center">
  <script>
      function confirmarBorrar(){
        return (confirm('¿Estas seguro que quieres borrar el grupo?'));
      }
  </script>  
</div>
<div>
     <p class="text-center mt-5 mi_letra">Posts del mismo grupo</p>
</div>
<div class="d-flex justify-content-center">
    <table class="table table-striped table-hover w-75">
        
       @foreach ( $group->posts as $post)
          <tr class="table-active">
            <td>
                <a href="{{ route('posts.show',$post)}}">{{ $post->title }}</a>
            </td>
            <td>
                <p>{{ $post->content }}</p>
            </td>
            <td>
                <a href="{{ route ('groups.edit',['group' => $group]) }}"><img src="{{ asset('img/edit.png') }}" alt=""></a>
            </td>
            <td>
                <form method="post" action="{{ route ('groups.destroy',['group' => $group])}}" onsubmit="confirmarBorrar()">
                    @method('delete')
                    @csrf
                    {{-- <input type="hidden" name="id" id="id" value="{{$post->id}}"> --}}
                    <button type="submit" class="btn_borrar"><img src="{{ asset('img/recycle-bin.png') }}" alt=""></button>
                </form>
                
            </td>
            <td>
                <a href="{{ route ('groups.index') }}"><img src="{{asset('img/volver.png')}}" alt=""></a>
            </td>
          </tr>  
       @endforeach
       
      </table>
</div>

@endsection