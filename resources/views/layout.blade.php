<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}  @yield('page_title')</title>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <style>
    .card {
      box-shadow: 0 3px 5px rgba(0, 0, 0, 0.3);
    }
    .custom-file-input ~ .custom-file-label::after {
      content: "Обзор" !important;
    }
  </style>
</head>
<body>  
  
  <header>
    @include('_navigation')
  </header> 

  <main>
    <div class="container">
      @yield('content')
    </div>
  </main>

  <footer>

  </footer>
 
</body>
</html>