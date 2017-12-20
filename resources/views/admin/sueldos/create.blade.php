@extends('admin.layouts.admin')

@section('title', 'Sueldos')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar Sueldo</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal form-label-left" action="" method="post">
          <p class="text-muted font 13 m-b-30">
            Bienvenido a la seccion de registro de sueldo, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="pacientes">Trabajador</label>
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;" name="pacientes">
                    <option value=""></option>
                    <option value="1">73237155 Alexis Jesus Peralta Holyoak</option>
                    <option value="2">73237715 Juan Carlos Minaya</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="cargo">Cargo</label>
              <input type="text" name="cargo" value="" required="required" class="form-control" onkeypress="return alphaOnly(event);" disabled>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="fecha">Fecha de pago</label>
              <div class="input-group">
                <input type="text" name="fecha" id="dtp1" class="form-control has-feedback-left" data-date-today-highlight="true" >
                <span class="fa fa-calendar-o form-control-feedback left"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="sueldo">Sueldo base</label>
              <input type="number" name="sueldo" value="" required="required" class="form-control">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="incentivos">Total incentivos</label>
              <input type="number" name="incentivos" value="0" required="required" class="form-control" disabled>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="descuentos">Total incentivos</label>
              <input type="number" name="descuentos" value="0" required="required" class="form-control" disabled>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="pago">Pago total</label>
              <input type="number" name="pago" value="" required="required" class="form-control" disabled>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="estado">Estado de pago</label>
              <div class="input-group">
                <input type="checkbox" data-toggle="toggle" checked name=""  data-on="PAGADO" data-off="POR PAGAR"/>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-7 col-sm-7 col-xs-12">
              <label for="observacion" class="control-label">Observación</label>
              <textarea name="observacion" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
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
<!--select2-->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
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
      placeholder: 'Escribe un tipo de egreso o ingreso',
      theme: "bootstrap"
    });
});
</script>
@endsection
