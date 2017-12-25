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
                    <select class="form-control special2" style="width: 100%;" name="unidadMedida" disabled>
                        <option value=""></option>
                        <option value="1">111111 G & H</option>
                        <option value="2" selected>222222 Frasco 500ml</option>
                        <option value="3">333333 Inversiones Chicken</option>
                    </select>
                    <span class="input-group-btn">
                        <a href="{{route('medidas.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                    </span>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="nombre">Nombre</label>
                <input type="text" name="" class="form-control" value="Glucosa" readonly>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="descripcion">Código</label>
                <input type="text" name="" class="form-control" value="W4241325D" readonly>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="descripcion">Descripción</label>
                <input type="text" name="" class="form-control" value="" readonly>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaProduccion">Fecha de producción</label>
                <div class="input-group">
                    <input type="text" name="" value="17/04/2016" class="form-control has-feedback-left" data-date-end-date="0d" readonly>
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaVencimiento">Fecha de vencimiento</label>
                <div class="input-group">
                    <input type="text" name="" value="30/12/2017" class="form-control has-feedback-left" data-date-end-date="0d" readonly>
                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">

            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="">Estado</label>
                <div class="input-group">
                  <h3  class="green">SIN USO</h3>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaVencimiento">Acción</label>
                <div class="input-group">
                  <button type="button" class="btn btn-success" name="button">Empezar uso</button>
                </div>
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-10 col-sm-10 col-xs-12">
                  <a href="{{route('inventario.index')}}" class="btn btn-danger">Regresar</a>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="col-md-4 col-sm-4 col-xs-12"></div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <a href="{{route('inventario.edit')}}" class="btn btn-primary">Editar</a>
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
    $('#combobox').select2({
      placeholder: 'Escribe el Responsable del area',
      theme: "bootstrap"
    });
});
</script>
@endsection
