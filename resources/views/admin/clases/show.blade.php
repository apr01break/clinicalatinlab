@extends('admin.layouts.admin')

@section('title', 'Visualizar clase de servicio')
@section('title-right')
<div>
  <a href="{{route('subclases.create')}}" class="btn btn-primary">Crear subclase</a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Clase NOMBRE DE LA CLASE</h2>
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
              Bienvenido a la seccion de clases de servicio.
            </p>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" disabled>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-3 col-sm-3 col-xs-12"></div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <a href="{{route('clases.update')}}" class="btn btn-primary btn-sm">Actualizar</a>
                <a href="{{route('clases.index')}}" class="btn btn-danger btn-sm">Atras</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--SUB CLASES-->
    <div class="col-md-12 col-sm-12 col-xs-12">
      @include('admin.subclases.index')
    </div>
  </div>
</div>
@include('admin.subclases.destroy')
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--daterangepicker-->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--DataTable-->
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){$("#t_data_tables").DataTable()});
</script>
@endsection
