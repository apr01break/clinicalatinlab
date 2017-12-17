@extends('admin.layouts.admin')

@section('content')
<!--GENERAL INFORMATION-->
<div class="row tile_count">
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-user"></i>Total de usuarios</span>
    <div class="count">20</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i>Desde 24/10/2001</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-users"></i>Total de pacientes</span>
    <div class="count">10000</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i>Desde 24/10/2001</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-male"></i>Pacientes hombres</span>
    <div class="count green">7500</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i>Desde 24/10/2001</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-female"></i>Pacientes mujeres</span>
    <div class="count">2500</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i></i>Desde 24/10/2001</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-database"></i>Capacidad usada</span>
    <div class="count">28000</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i></i>Megabytes</span>
  </div>
  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
    <span class="count_top"><i class="fa fa-database"></i>Capacidad restante</span>
    <div class="count green">28000</div>
    <span class="count_bottom"><i class="green"><i class="fa fa-sort-desc"></i></i>Megabytes</span>
  </div>
</div>
<!--GENERAL INFORMATION-->
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Bienvenido</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <blockquote>
          <p>“¿Buena salud? ¿Mala salud? Todo depende del punto de vista. Desde el punto de vista de la gran industria farmacéutica, la mala salud es muy saludable.” </p>
          <footer>Eduardo Galeano</footer>
        </blockquote>
        <blockquote class="blockquote-reverse">
          <p>“No os dejéis corromper por un escepticismo estéril y deprimente; no os desalentéis ante la tristeza de ciertas horas que pasan sobre las naciones. Vivid en la serena paz de los laboratorios y las bibliotecas. Preguntaos primero: ¿Qué he hecho por instruirme? y, después, al ir progresando. ¿Qué he hecho por mi patria? Hasta que llegue el día en que podáis sentir la íntima satisfacción de pensar en que de alguna manera habéis contribuido al progreso y bienestar de la humanidad”.</p>
          <footer>Louis Pasteur</footer>
        </blockquote>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<!--nprogress-->
<link rel="stylesheet" href="{{secure_asset('css/nprogress.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{secure_asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{secure_asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{secure_asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{secure_asset('js/custom.min.js')}}"></script>
@endsection
