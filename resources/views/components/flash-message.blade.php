 @props([
    'code',
    'message'
])

@if ($code > 0)
  <div id="flashMessage" class="text-{{$type}} p-2 fixed-top">
    {{$code}} - {{$message}}
  </div>

    <script>
        @if ($timeout > 0)
            setTimeout(() => {
              let msg = document.getElementById('flashMessage');
              if (msg) {
                msg.style.display = 'none';
              }
            },{{$timeout}});
         @endif  
    </script>

@endif
