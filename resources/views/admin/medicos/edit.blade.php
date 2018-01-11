@extends('admin.layouts.admin')

@section('title', 'Médicos')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Editar médico</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <form class="form-horizontal form-label-left" action="{{route('medicos.update',$medico->id)}}" method="post">
          <p class="text-muted font 13 m-b-30">
            Bienvenido a la seccion de edición de médicos, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            {{ csrf_field() }}
            <label for="nombre" class="control-label col-md-3 col-sm-3 col-xs-12">Nombre</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="nombre" value="{{$medico->nombre}}" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
              <a href="{{route('medicos.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
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
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}
};
$(document).ready(function() {
    $('#combobox').select2({
      placeholder: 'Escribe el Responsable del area',
      theme: "bootstrap"
    });
});
</script>
@endsection
