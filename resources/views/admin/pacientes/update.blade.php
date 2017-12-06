@extends('admin.layouts.admin')

@section('title', 'Modificar registro paciente')
@section('title-right')
<div>
  <label for="num_historia" class="control-label">Numero Historia</label>
  <input type="text" name="" value="" placeholder="Numero de Historia" class="form-control">
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Modificar paciente</h2>
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
            Bienvenido a la seccion de registro de pacientes, asegurate de ingresar los datos correctamente antes de aceptar.
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
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" id="dtp1" class="form-control has-feedback-left" data-date-end-date="0d">
              <span class="fa fa-calendar-o form-control-feedback left"></span>
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
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nro">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Interior">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Mza">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <input type="number" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Lote">
            </div>
          </div>
          <div class="separator"></div>
          <div class="form-group">
            <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Localidad</label>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <select class="form-control" name="">
                <option value="">DNI</option>
                <option value="">Pasaporte</option>
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
            <label for="tipo_financiador" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de financiador</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <select class="form-control col-md-7 col-xs-12" name="">
                <option value="">Convenio</option>
                <option value="">Particular</option>
              </select>
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
            <div class="col-md-3 col-sm-3 col-xs-12 checkbox">
                <div class="icheckbox_flat-green" style="position: relative;">
                  <input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;">
                </div>
                Veterinaria
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 checkbox">
                <div class="icheckbox_flat-green" style="position: relative;">
                  <input type="checkbox" class="flat" checked="checked" style="position: absolute; opacity: 0;">
                </div>
                Discapacitado
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="button" name="button" class="btn btn-primary btn-sm">Actualizar</button>
              <a href="{{route('pacientes.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
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
<!--iCheck-->
<link rel="stylesheet" href="{{asset('css/green.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--iCheck-->
<script type="text/javascript" src="{{asset('js/icheck.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}
};
</script>
@endsection
