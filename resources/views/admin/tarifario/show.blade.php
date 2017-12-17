@extends('admin.layouts.admin')

@section('title', 'Detalle servicio')
@section('content')
<div class="row">
  <form class="form-horizontal form-label-left" action="" method="post">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_title">
          <h2>Detalle del servicio</h2>
          <ul class="nav navbar-right panel-toolbox">
            <li>
              <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content" style="display: block;">
            <p class="text-muted font 13 m-b-30">
              Bienvenido a la seccion de detalle de servicios, asegurate de ingresar los datos correctamente antes de aceptar.
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
                <input type="text" name="" value="" id="lugar_nacimiento" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="lugar_nacimiento" class="control-label col-md-3 col-sm-3 col-xs-12">Sub Clase</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <input type="text" name="" value="" id="lugar_nacimiento" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="separator"></div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Unidad de Medida</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <input type="text" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Area</label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <!--autocomplete-->
                <input type="text" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12">
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
                <input type="text" name="" value="" id="direccion" required="required" class="form-control col-md-7 col-xs-12">
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
                <a href="{{route('tarifario.update')}}" class="btn btn-primary btn-sm">Actualizar</a>
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
<link rel="stylesheet" href="{{secure_asset('css/nprogress.css')}}">
<!--daterangepicker-->
<link rel="stylesheet" href="{{secure_asset('css/bootstrap-datepicker.min.css')}}">
<!--iCheck-->
<link rel="stylesheet" href="{{secure_asset('css/green.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{secure_asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{secure_asset('js/nprogress.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{secure_asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--iCheck-->
<script type="text/javascript" src="{{secure_asset('js/icheck.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{secure_asset('js/custom.min.js')}}"></script>
@endsection
