@extends('admin.layouts.admin')

@section('title', 'Balances')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar ingreso o egreso</h2>
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
            Bienvenido a la seccion de registro de ingresos o egresos, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Razon</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <div class="input-group input-group-sm">
                <select id="combobox" class="form-control" style="width: 100%;">
                  <option value=""></option>
                  <option value="1">Factura por cobrar</option>
                  <option value="2">Pago de salario</option>
                  <option value="3">Compra de materiales</option>
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
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Monto</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
              <input type="number" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Fecha</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" id="dtp1" class="form-control has-feedback-left">
              <span class="fa fa-calendar-o form-control-feedback left"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Observacion</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <!--autocomplete-->
                <textarea name="name" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <button type="button" name="button" type="submit" class="btn btn-primary btn-sm">Registrar</button>
              <a href="{{route('areas.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
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
<!--select2-->
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
    $('#combobox').select2({
      placeholder: 'Escribe un tipo de egreso o ingreso',
      theme: "bootstrap"
    });
});
</script>
<!--jqueriui-->
@endsection
