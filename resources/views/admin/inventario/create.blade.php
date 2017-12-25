@extends('admin.layouts.admin')

@section('title', 'Inventario')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar producto</h2>
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
            Bienvenido a la seccion de registro de productos, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="descripcion">Unidad de medida</label>
                <div class="input-group input-group-sm">
                    <select class="form-control special2" style="width: 100%;" name="unidad_medida_id" required>
                        <option value=""></option>
                        <option value="1">111111 G & H</option>
                        <option value="2">222222 Efe</option>
                        <option value="3">333333 Inversiones Chicken</option>
                    </select>
                    <span class="input-group-btn">
                        <a href="{{route('medidas.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="" required>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="descripcion">Código</label>
                <input type="text" name="codigo" class="form-control" value="" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="descripcion">Descripción</label>
                <input type="text" name="descripcion" class="form-control" value="">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaProduccion">Fecha de producción</label>
                <div class="input-group">
                    <input type="text" name="fechaProduccion" class="dtp1 form-control has-feedback-left" data-date-end-date="0d" required>
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaVencimiento">Fecha de vencimiento</label>
                <div class="input-group">
                    <input type="text" name="fechaVencimiento" class="form-control dtp1 has-feedback-left" data-date-end-date="0d" required>
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
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
  function selection(){
    $('.special2').select2({
      placeholder: 'Seleccione uno...',
      theme: "bootstrap"
    });
  }
  function date(){
    $('.dtp1').datepicker();
  }
  date();
  selection();

});
</script>
@endsection
