@extends('admin.layouts.admin')

@section('title', 'Empleados')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Visualizacion de empleado</h2>
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
            Bienvenido a la seccion de Visualizacion de empleados, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Nombres</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <label for="apellido_paterno" class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Paterno</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="apellido_paterno" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <label for="apellido_paterno" class="control-label col-md-3 col-sm-3 col-xs-12">Apellido Materno</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="apellido_materno" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
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
            <label for="sexo" class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="btn-group" data-toggle="buttons">
                <label class="btn btn-default active">
                  <input type="radio" name="sexo"  autocomplete="off" checked> Masculino
                </label>
                <label class="btn btn-default">
                  <input type="radio" name="sexo"  autocomplete="off"> Femenino
                </label>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">Lugar de nacimiento</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <input type="text" name="" value="" id="lugar_nacimiento" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label for="documento_identidad" class="control-label col-md-3 col-sm-3 col-xs-12">Documento de identidad</label>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <select class="form-control" name="">
                <option value="">DNI</option>
                <option value="">Pasaporte</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" class="form-control">
              <input type="text" name="" value="" class="form-control" id="documento_identidad" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
          </div>
          <div class="separator"></div>
          <div class="form-group">
            <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Direccion</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <input type="text" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Especificacion de direccion</label>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nro" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Interior" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Mza" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lote" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
          </div>
          <div class="separator"></div>
          <div class="form-group">
            <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Localidad</label>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <select class="form-control" name="">
                <option value="">AAHH</option>
                <option value="">Asoc.</option>
                <option value="">Caserio</option>
                <option value="">Comite</option>
                <option value="">Cooperativa</option>
                <option value="">PPJJ</option>
                <option value="">Urb</option>
                <option value="">Villorio</option>
              </select>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12" class="form-control">
              <input type="text" name="" value="" class="form-control" id="localidad">
            </div>
          </div>
          <div class="form-group">
            <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Distrito</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <input type="text" name="" value="" id="distrito" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label for="contactos" class="control-label col-md-3 col-sm-3 col-xs-12">Contactos</label>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <input type="text" name="" value="" id="distrito" required="required" class="form-control col-md-7 col-xs-12" placeholder="telefono" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                <span class="fa fa-phone form-control-feedback right"></span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <input type="text" name="" value="" id="distrito" required="required" class="form-control col-md-7 col-xs-12" placeholder="movil" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
              <span class="fa fa-mobile form-control-feedback right"></span>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <input type="text" name="" value="" id="distrito" required="required" class="form-control col-md-7 col-xs-12" placeholder="trabajo" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
              <span class="fa fa-phone-square form-control-feedback right"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Cargo del empleado</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <div class="input-group input-group-sm">
                <select id="" class="form-control select2" style="width: 100%;">
                  <option value=""></option>
                  <option value="1">Doctor<ption>
                  <option value="2">Administrador</option>
                  <option value="3">Secretaria</option>
                  <option value="4">Pago de servicio</option>
                  <option value="5">Compra de suministros</option>
                </select>
                <span class="input-group-btn">
                    <a href="{{route('financieras.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Observación</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="name" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="button" name="button" type="submit" class="btn btn-primary btn-sm">Registrar</button>
              <a href="{{route('empleados.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
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
<!--daterangepicker-->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<!--select2-->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}
};
$(document).ready(function() {
    $('.select2').select2({
      placeholder: 'Selecciona una opcion',
      theme: "bootstrap"
    });
});
</script>
@endsection
