@extends('admin.layouts.admin')

@section('title', 'Usuarios')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar usuario</h2>
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
            Bienvenido a la seccion de registro de usuario, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Empleado</label>
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
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
            <div class="col-md-4 col-sm-4 col-xs-12 input-group input-group-sm">
              <input type="text" class="form-control col-md-7 col-xs-12"name="" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="usuario" class="control-label col-md-3 col-sm-3 col-xs-12">Usuario</label>
            <div class="col-md-4 col-sm-4 col-xs-12 input-group input-group-sm">
              <input type="text" class="form-control col-md-7 col-xs-12"name="" value="">
            </div>
          </div>
          <div class="form-group">
            <label for="usuario" class="control-label col-md-3 col-sm-3 col-xs-12">Contraseña</label>
            <div class="col-md-4 col-sm-4 col-xs-12 input-group input-group-sm">
              <input type="text" class="form-control col-md-7 col-xs-12"name="" value="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <p>Aqui puedes seleccionar todos los accesos a la vistas por el usuario</p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <ul class="to_do">
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Tarifario
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Clases
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Cpts
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Unidades de medida
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Pacientes
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Comprobantes
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Medicos
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Empresas
                </p></li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="button" name="button" type="submit" class="btn btn-primary btn-sm">Registrar</button>
              <a href="{{route('clases.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
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
<!--iCheck-->
<link rel="stylesheet" href="{{asset('css/green.css')}}">
<!--bootstrap toggle-->
<link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
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
<!--iCheck-->
<script type="text/javascript" src="{{asset('js/icheck.min.js')}}"></script>
<!--bootstrap switch-->
<script type="text/javascript" src="{{asset('js/bootstrap-toggle.min.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}
};
$(document).ready(function() {
    $('.special2').select2({
      placeholder: 'Escriba su busqueda...',
      theme: "bootstrap"
    });
});
</script>
@endsection
