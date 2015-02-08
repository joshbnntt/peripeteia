<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

   <head>

      <meta http-equiv="Content-Type"  content="charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!-- The document title -->
      @yield('page-title')

      <!-- Page styles -->
      <link rel="stylesheet" href="{{ elixir("css/all.css") }}">
      @yield('extra-css')

      <!-- JS to give older browsers HTML5 support -->
      {{ HTML::script('js/modernizr.js') }}
   </head>

   <body>
      <!-- Page topbar -->
      @include('partials.topbar')

      <!-- Main page content -->
      @yield('content')

      <!-- Page scripts -->

      <script src="{{ elixir("js/all.js") }}"></script>

      @yield('extra-js')
   </body>
</html>