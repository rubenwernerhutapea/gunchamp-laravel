<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    {{-- stylesheet --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('name')</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ url('/img/logo-white.png') }}">

    
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- page content --}}
    @yield('content')

    {{-- footer --}}
    @include('includes.footer')

    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
