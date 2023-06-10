<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.header')

  <body>
    @section('sidebar')
      This is the master sidebar
    @show

    <div class='container'>
      @yield('content')
    </div>

    @include('layouts.footer')
  </body>
</html>
