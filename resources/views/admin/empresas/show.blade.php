@extends('admin.layouts.admin')

@section('title', 'Inventario')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar empresa</h2>
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
            Bienvenido a la seccion de registro de empresas, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>

          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" readonly>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="abreviatura">Abreviatura</label>
                <input type="text" name="abreviatura" class="form-control" readonly>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
                <label for="giroNegocio">Giro de negocio</label>
                <input type="text" name="giroNegocio" class="form-control" readonly>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="veterinaria">Veterinaria</label>
                <div class="input-group">
                  <input type="checkbox" class="bts-togg" name="veterinaria"  data-on="Si" data-off="No"/ disabled>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="ruc">N° RUC</label>
                <input type="number" name="ruc" class="form-control" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="grupo">Grupo</label>
                <input type="text" name="grupo" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="atencion">Atención</label>
                <input type="text" name="atencion" class="form-control" value="" readonly>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaConsti">Fecha Constitución</label>
                <div class="input-group">
                    <input type="text" readonly name="fechaConsti" class="dtp1 form-control has-feedback-left" data-date-end-date="0d">
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaAniver">Fecha Aniversario</label>
                <div class="input-group">
                    <input type="text" readonly name="fechaAniver" class="dtp1 form-control has-feedback-left" data-date-end-date="0d">
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" class="form-control" value="" readonly>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="cargo">Cargo</label>
                <input type="text" name="cargo" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="distrito_id">Ubicación</label>
                <div class="input-group input-group-sm">
                    <select class="form-control special2" style="width: 100%;" name="distrito_id" disabled>
                        <option value=""></option>
                        <option value="1">Huacho</option>
                        <option value="2">Lima</option>
                    </select>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="telefono">Teléfono</label>
                <input type="text" name="telefono" class="form-control" value="" readonly>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="anexo">Anexo</label>
                <input type="text" name="anexo" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="homePage">Home Page</label>
                <input type="text" name="homePage" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="observacion">Observación</label>
                <input type="text" name="observacion" class="form-control" value="" readonly>
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-10 col-sm-10 col-xs-12">
                  <a href="{{route('inventario.index')}}" class="btn btn-danger">Cancelar</a>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="col-md-4 col-sm-4 col-xs-12"></div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <a href="{{route('inventario.index')}}" class="btn btn-primary">Guardar</a>
                  </div>
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
<!--bootstrap toggle-->
<link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
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
  function selection(){
    $('.special2').select2({
      placeholder: 'Seleccione uno...',
      theme: "bootstrap"
    });
  }
  function toggler(){
    $('.bts-togg').bootstrapToggle();
  }
  function date(){
    $('.dtp1').datepicker();
  }
  date();
  toggler();
  selection();

});
</script>
@endsection
