@extends('layouts.app')

@section('page')
  @yield('content')
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
@endsection
