<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <style>
      body {
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          padding: 10px;
          background-image: url("/../img/banner.png");
          background-size: cover;
          background-position: center;
          color: #0b0e40;
      }
    </style>

    {{-- stylesheet --}}
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')

    <title>@yield('name')</title>

    
  </head>
  <body>
    {{-- navbar --}}
    @include('includes.navbar')

    {{-- page content --}}
    @yield('content')

    {{-- script --}}
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
  </body>
</html>
