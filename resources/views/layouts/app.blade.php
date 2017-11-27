<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Latin Lab</title>
    @include('layouts.styles')
  </head>
  <body class="@yield('body_class')">
    @yield('page')
    @include('layouts.scripts')
  </body>
</html>
