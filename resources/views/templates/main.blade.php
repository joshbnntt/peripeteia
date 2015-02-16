<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en">

   <head>

      <meta http-equiv="Content-Type"  content="charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />

      <!-- The document title -->
      @yield('page-title')

      <!-- Page styles -->
      <link rel="stylesheet" href="/css/app.css">
      @yield('extra-css')
   </head>

   <body>
      <div class="color-band"></div>
      <!-- Page topbar -->
      @include('partials.topbar')

      <!-- Main page content -->
      <div class="container">
         @yield('content')
      </div>

      <!-- Page scripts -->
      <script src="/js/app.js"></script>
      @yield('extra-js')
   </body>
</html>