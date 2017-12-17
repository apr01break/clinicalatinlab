@extends('admin.layouts.admin')

@section('title', 'Registrar servicio')
@section('content')
<div class="row">
  <form class="form-horizontal form-label-left" action="" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Registrar servicio</h2>
          <ul class="nav navbar-right panel-toolbox">
            <li>
              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content" style="display: block;">
            <p class="text-muted font 13 m-b-30">
              Bienvenido a la seccion de registro de servicios, asegurate de ingresar los datos correctamente antes de aceptar.
            </p>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Descripción</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
              </div>
            </div>
            <div class="form-group">
              <label for="apellido_paterno" class="control-label col-md-3 col-sm-3 col-xs-12">Breve</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="" value="" id="apellido_paterno" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
              </div>
            </div>
            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">Clase</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;">
                    <option value=""></option>
                    <option value="1">Clase 1</option>
                    <option value="2">Clase 2</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('clases.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">Sub Clase</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;">
                    <option value=""></option>
                    <!--LA INFORMACION DEBE CAMBIAR SEGUN LA CLASE SELECCIONADA-->
                    <option value="1">sub clase 1</option>
                    <option value="2">sub clase 2</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('subclases.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="separator"></div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Unidad de Medida</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;">
                    <option value=""></option>
                    <option value="1">METRO</option>
                    <option value="2">CENTIMETRI</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('medidas.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Area</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;">
                    <option value=""></option>
                    <option value="1">PATOLOGIA</option>
                    <option value="2">HEMOLOGIA</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('areas.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de ayd. diagn.</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <select class="form-control" name="">
                  <option value="">Laboratio</option>
                  <option value="">Anatomia patologica</option>
                  <option value="">Ecografia obstetrica</option>
                  <option value="">Medicina pediatrica</option>
                  <option value="">Radiologia</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Cpt</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <div class="input-group input-group-sm">
                  <select  class="form-control special2" style="width: 100%;">
                    <option value=""></option>
                    <option value="1">cpt 1</option>
                    <option value="2">cpt 2</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('financieras.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
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
                    Afecto a categoria social
                  </p></li>
                  <li><p>
                    <div class="icheckbox_flat-green" style="position:relative;">
                      <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                    </div>
                    Afecto a categoria Temporal
                  </p></li>
                  <li><p>
                    <div class="icheckbox_flat-green" style="position:relative;">
                      <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                    </div>
                    Tarifa Libre
                  </p></li>
                  <li><p>
                    <div class="icheckbox_flat-green" style="position:relative;">
                      <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                    </div>
                    Afecto IGV
                  </p></li>
                  <li><p>
                    <div class="icheckbox_flat-green" style="position:relative;">
                      <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                    </div>
                    Veterinaria
                  </p></li>
                </ul>
              </div>
            </div>
            <div class="separator"></div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Importe base</label>
              <div class="col-md-3 col-sm-3 col-xs-12">
                <input type="number" name="" value="" id="importe_base" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="clearfix"></div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pacientes por convenio</h2>
            <ul class="nav navbar-right panel-toolbox">
              <li>
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Tarifa</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="inputnumber" required="required" class="inputBox form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Precio Calc</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="precio_calc_convenio" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Precio Excepcion</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="inputnumber" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-4 col-sm-4 col-xs-12">Observación</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea name="name" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Pacientes particulares</h2>
            <ul class="nav navbar-right panel-toolbox">
              <li>
                <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Tarifa</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Precio Calc</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="precio_calc_partic" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="nombres" class="control-label col-md-4 col-sm-4 col-xs-12">Precio Excepcion</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="number" name="" value="" id="precio_exc_partic" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-4 col-sm-4 col-xs-12">Observación</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea name="name" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <div class="form-group">
              <div class="col-md-3 col-sm-3 col-xs-12">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <button type="button" name="button" type="submit" class="btn btn-primary btn-sm">Registrar</button>
                <a href="{{route('tarifario.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
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
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<!--iCheck-->
<script type="text/javascript" src="{{asset('js/icheck.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
//solo permite el ingreso de letras, espacios y mayusculas
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}};
//solo se puede introducir caracteres numericos
function numbersOnly(event){var invalidChars = ["-","+","e",];if (invalidChars.includes(event.key)) {event.preventDefault();}};
$(document).ready(function() {
    $('.special2').select2({
      placeholder: 'Seleccione uno...',
      theme: "bootstrap"
    });
});
</script>
@endsection
