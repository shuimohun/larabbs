<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
<<<<<<< HEAD
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>
  <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')"/>

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

  @yield('styles')
=======
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'LaraBBS') - Laravel 进阶教程</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
</head>

<body>
<div id="app" class="{{ route_class() }}-page">

<<<<<<< HEAD
  @include('layouts._header')

  <div class="container">

    @include('shared._messages')

    @yield('content')

  </div>

  @include('layouts._footer')
=======
    @include('layouts._header')

    <div class="container">

        @include('shared._messages')

        @yield('content')

    </div>

    @include('layouts._footer')
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
</div>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}"></script>
<<<<<<< HEAD
@yield('scripts')

=======
>>>>>>> c82c335ce322802437713ec9d3d2f1e421fc51f3
</body>

</html>
