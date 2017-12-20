@extends('admin.layouts.admin')

@section('title', 'Solicitudes')
@section('title-right')
<div>
  <label for="codigo">Codigo</label>
  <input type="text" name="codigo" value="" class="form-control" disabled>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar solicitud</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <form class="form-horizontal form-label-left" action="" method="post">
          <p class="text-muted font 13 m-b-30">
            Bienvenido a la seccion de registro de solicitudes, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Paciente</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Alexis Jesus Peralta Holyoak</option>
                <option value="2">73237715 Juan Carlos Minaya</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Empresa</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Las tejas</option>
                <option value="2">73237715 El condado</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="fecha_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento</label>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <input type="text" name="" id="dtp1" class="form-control has-feedback-left" data-date-end-date="0d">
              <span class="fa fa-calendar-o form-control-feedback left"></span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <input type="number" name="" class="form-control has-feedback-right">
                <span class="form-control-feedback right">AA</span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <input type="number" name="" class="form-control has-feedback-right">
                <span class="form-control-feedback right">MM</span>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <input type="number" name="" class="form-control has-feedback-right">
                <span class="form-control-feedback right">DD</span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Servicio Ejecutante</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Las tejas</option>
                <option value="2">73237715 El condado</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Servicio solicitante</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Las tejas</option>
                <option value="2">73237715 El condado</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Medico</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Las tejas</option>
                <option value="2">73237715 El condado</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="button" name="button" type="submit" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#bs-addexam-modal-lg">Registrar</button>
              <a href="{{route('solicitudes.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.solicitudes.addexam')
@endsection

@section('style')
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--select2-->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<!--daterangepicker-->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.special2').select2({
      placeholder: 'Escriba su busqueda...',
      theme: "bootstrap"
    });
});
</script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
@endsection
