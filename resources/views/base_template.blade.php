<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-scale=1, shrink-to-fit=no">
    
    <title>{{ __('general.title')  }}</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
      
  </head>

  <body id="vApp">

    <div class="container">
      @include('partials/header')

      @yield('body')
    </div>
    <div class="container-fluid">
      @include('partials/footer')
    </div>
    
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/custom.js') }}"></script>
  </body>
</html>
