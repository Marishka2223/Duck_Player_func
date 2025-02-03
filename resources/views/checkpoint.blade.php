
@guest 
<script>
    window.location.href = "{{route('login')}}";
    </script>
    @endguest

    @auth 
    <img src="{{ asset('images/zv.png') }}">
@if(Auth::check() && Auth::user()->name === 'admin')
<script>
    window.location.href = "{{route('adminpanel')}}";
    </script>

    @endif

    @if(Auth::check() && Auth::user()->name != 'admin')
    <script>
    window.location.href = "{{route('acpo')}}";
    </script>

    @endif
    @endauth
    