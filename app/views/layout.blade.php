<!doctype html>

<html class="no-js" lang="en">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   <title>Welcome to Foundation</title>

   <!-- Stylesheet files-->
   <link rel="stylesheet" href="{{ elixir("css/all.css") }}">

   <!-- JS to give older browsers HTML5 support -->
   {{ HTML::script('js/modernizr.js') }}
</head>
<body>
   @yield('content')

   <!-- Page scripts -->
   <script src="{{ elixir("js/all.js") }}">
</body>
</html>