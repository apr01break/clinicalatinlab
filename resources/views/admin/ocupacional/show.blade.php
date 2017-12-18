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
                    <input type="text" name="" class="form-control" value="111111 Alexis Jesus Peralta Holyoak" readonly>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="empresas">Empresa</label>
                    <input type="text" name="" class="form-control" value="333333 Inversiones Chicken" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="empresas">Ocupacion</label>
                    <input type="text" name="" class="form-control" value="Operario" readonly>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                  <label for="residenciaOcupacion">Residencia en el trabajo</label>
                  <div class="input-group">
                    <input type="checkbox" class="bts-togg" name="hc[]"  data-on="Si" data-off="No"/ disabled>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <label for="tiempoResidencia">Tiempo de residencia</label>
                    <input type="text" class="form-control" name="" value="" readonly>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <label for="seguro">Seguro</label>
                    <input type="text" name="" value="EsSalud" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="" value="abc@gmail.com" readonly>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="estadoCivil">Estado civil</label>
                    <input type="text" name="" value="Casado" class="form-control" readonly>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="gradoInstruccion">Grado de instrucción</label>
                    <input type="text" name="" value="Secundaria Completa" class="form-control" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="nroHijosVivos">N° hijos vivos</label>
                    <input type="number" class="form-control" name="" value="2" min="0" readonly>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="nroDependientes">N° dependientes</label>
                    <input type="number" class="form-control" name="" value="3" min="0" readonly>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <a href="{{route('ocupacional.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <button type="button" name="button" type="submit" class="btn btn-primary">Continuar</button>
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
var add_button      = $(".add_field_button"); //Add button ID
//for select2
function selection(){
  $('.special2').select2({
    placeholder: 'Seleccione uno...',
    theme: "bootstrap"
  });
}
//bootstrap toggle
function toggler(){
  $('.bts-togg').bootstrapToggle();
}
selection();
toggler();
//for add more items
$(add_button).click(function(e){ //on add input button click
   e.preventDefault();
   $(wrapper).append('<div class="form-group"> <div class="col-md-4 col-sm-4 col-xs-12"> <label for="servicio">Servicio</label> <select class="form-control special2" style="width: 100%;" name="servicio[]"> <option value=""></option> <option value="1">Hematologia</option> <option value="2">Hemograma</option> </select> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="unit">Valor unit.</label> <input type="number" name="unit[]" value="" class="form-control" disabled> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="cantidad">Cantidad</label> <input type="number" name="cantidad[]" value="" class="form-control"> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="subtotal">Sub total</label> <input type="number" name="subtotal[]" value="" class="form-control" disabled> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="descuento">Descuento</label> <input type="number" name="descuento[]" value="" class="form-control"> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="total">Total</label> <input type="number" name="total[]" value="" class="form-control" disabled> </div><div class="col-md-1 col-sm-1 col-xs-12"> <label for="total"> </label> <button type="button" name="button" class="form-control btn btn-danger fa fa-trash remove_field"></button> </div></div>');
   selection();
   toggler();
});
$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
   e.preventDefault(); $(this).closest('div[class^="form-group"]').remove();
})
});
</script>
@endsection