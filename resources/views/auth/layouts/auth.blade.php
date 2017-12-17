@extends('layouts.app')

@section('page')
  @yield('content')
@endsection

@section('style')
<link rel="stylesheet" href="{{secure_asset('css/animate.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{secure_asset('css/custom.min.css')}}">
@endsection
