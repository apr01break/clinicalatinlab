@extends('layouts.app')

@section('page')
  @yield('content')
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection
