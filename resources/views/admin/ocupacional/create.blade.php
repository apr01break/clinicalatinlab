@extends('admin.layouts.admin')

@section('title', 'Pacientes Ocupacionales')
@section('content')
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>Registrar paciente ocupacional</h2>
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
                Bienvenido a la seccion de registro de pacientes ocupacionales, asegurate de ingresar los datos correctamente antes de aceptar.
            </p>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="pacientes">Paciente</label>
                    <div class="input-group input-group-sm">
                        <select class="form-control special2" style="width: 100%;" name="paciente_id" required>
                            <option value=""></option>
                            <option value="1">111111 Alexis Jesus Peralta Holyoak</option>
                            <option value="2">333333 minaya</option>
                        </select>
                        <span class="input-group-btn">
                            <a href="{{route('pacientes.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                        </span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="empresas">Empresa</label>
                    <div class="input-group input-group-sm">
                        <select class="form-control special2" style="width: 100%;" name="empresa_id" required>
                            <option value=""></option>
                            <option value="1">111111 G & H</option>
                            <option value="2">222222 Efe</option>
                            <option value="3">333333 Inversiones Chicken</option>
                        </select>
                        <span class="input-group-btn">
                            <a href="{{route('pacientes.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="tipoEvaluacion1">Tipo Evaluación</label>
                    <select class="form-control" name="tipoEvaluacion1">
                      <option value="">Pre-Ocupacional</option>
                      <option value="">Ocupacional</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="tipoEvaluacion2">Tipo Evaluación</label>
                    <select class="form-control" name="tipoEvaluacion2">
                      <option value="">Ingreso</option>
                      <option value="">Periódico</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="fechaEvaluacion">  Fecha de evaluación</label>
                    <div class="input-group">
                        <input type="text" name="fechaEvaluacion" class="dtp1 form-control has-feedback-left" data-date-end-date="0d">
                        <span class="fa fa-calendar-o form-control-feedback left"></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="ocupacion">Ocupacion</label>
                    <input type="text" name="ocupacion" class="form-control" value="">
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                  <label for="residenciaOcupacion">Residencia en el trabajo</label>
                  <div class="input-group">
                    <input type="checkbox" id="cbResidencia" class="bts-togg" name="residenciaOcupacion"  data-on="Si" data-off="No"/>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <label for="tiempoResidencia">Tiempo de residencia</label>
                    <input type="text" id="tmpResidencia" class="form-control" name="tiempoResidencia" value="" disabled>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <label for="seguro">Seguro</label>
                    <select class="form-control" name="seguro">
                      <option value="">EsSalud</option>
                      <option value="">EPS</option>
                      <option value="">SCTR</option>
                      <option value="">Otro</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" value="">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="estadoCivil">Estado civil</label>
                    <select class="form-control" name="estadoCivil">
                      <option value="">Soltero</option>
                      <option value="">Casado</option>
                      <option value="">Conviviente</option>
                      <option value="">Viudo</option>
                      <option value="">Divorciado</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="gradoInstruccion">Grado de instrucción</label>
                    <select class="form-control" name="gradoInstruccion">
                      <option value="">Primaria incompleta</option>
                      <option value="">Primaria completa</option>
                      <option value="">Secundaria incompleta</option>
                      <option value="">Secundaria completa</option>
                      <option value="">Tercio superios incompleto</option>
                      <option value="">Tercio superios completo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="nroHijosVivos">N° hijos vivos</label>
                    <input type="number" class="form-control" name="nroHijosVivos" value="" min="0">
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="nroDependientes">N° dependientes</label>
                    <input type="number" class="form-control" name="nroDependientes" value="" min="0">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <a href="{{route('ocupacional.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="{{route('ocupacional.empresa.create')}}" class="btn btn-primary">Continuar</a>
                    </div>
                </div>
            </div>
        </form>
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
<!--bootstrap toggle-->
<link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
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
var wrapper         = $(".input_fields_wrap"); //Fields wrapper
//for select2
function selection(){
  $('.special2').select2({
    placeholder: 'Seleccione uno...',
    theme: "bootstrap"
  });
}
$('#cbResidencia').on('change',function(){
  if($(this).prop('checked')==true){
    $('#tmpResidencia').prop('disabled',false);
  }else{
    $('#tmpResidencia').val('');
    $('#tmpResidencia').prop('disabled',true);
  }
})
function date(){
  $('.dtp1').datepicker();
}
date();
//bootstrap toggle
function toggler(){
  $('.bts-togg').bootstrapToggle();
}
selection();
toggler();

});
</script>
@endsection
