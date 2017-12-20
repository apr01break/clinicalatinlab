@extends('admin.layouts.admin')

@section('title', 'Examenes')
@section('title-right')
<div>
  <label for="codigo">Codigo</label>
  <input type="text" name="codigo" value="" class="form-control" disabled>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Ver solicitud</h2>
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

          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Paciente</label>
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
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Empresa</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">73237155 Las tejas</option>
                <option value="2">73237715 El condado</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
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
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Procesado por</label>
            <div class="col-md-6 col-sm-6 col-xs-12 input-group input-group-sm">
              <select class="form-control col-md-7 col-xs-12 special2" style="width: 100%;" name="pacientes">
                <option value=""></option>
                <option value="1">Lic Castro</option>
                <option value="2">Dr federico</option>
              </select>
              <span class="input-group-btn">
                  <a href="{{route('empleados.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
              </span>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Valores Normales</h2>
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
            Aqui puedes visualizar los valores normales para el examen solicitado
          </p>
          <div class="form-group">
            <label for="direccion" class="control-label col-md-3 col-sm-3 col-xs-12">Valores normales</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <textarea name="name" rows="8" cols="80" class="form-control" style="resize:none;" disabled></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Resultados</h2>
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
            Aqui puedes registrar los resultados del examen
          </p>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Titulo</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);" disabled>
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Valor</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Descripcion del resultado</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Unidad</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <label for="nombres" class="control-label col-md-3 col-sm-3 col-xs-12">Rango</label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="text" name="" value="" id="nombres" required="required" class="form-control col-md-7 col-xs-12" onkeypress="return alphaOnly(event);">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <button type="button" name="button" class="btn btn-primary col-md-6 col-sm-6 col-xs-12">Registrar resultado</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar muestras</h2>
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
            Selecciona las muestras que contiene el examen
          </p>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <ul class="to_do">
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Muestra de orina
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Muestra de sangre
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Muestre de semen
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Muestra de heces
                </p></li>
                <li><p>
                  <div class="icheckbox_flat-green" style="position:relative;">
                    <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                  </div>
                  Muestra de otro
                </p></li>
              </ul>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>
            <button type="button" name="button" class="btn btn-primary col-md-6 col-sm-6 col-xs-12">Registrar muestras</button>
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
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.special2').select2({
      placeholder: 'Escriba su busqueda...',
      theme: "bootstrap"
    });
});
</script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
@endsection
