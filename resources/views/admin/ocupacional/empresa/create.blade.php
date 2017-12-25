@extends('admin.layouts.admin')

@section('title', 'Empresas Anteriores')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Registrar empresas anteriores</h2>
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
                        Bienvenido a la seccion de registro de empresas anteriores de pacientes ocupacionales, asegurate de ingresar los datos correctamente antes de aceptar.
                    </p>
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="pacientes">Paciente</label>
                            <div class="input-group input-group-sm">
                                <select class="form-control special2" style="width: 100%;" name="paciente_id" disabled>
                                    <option value=""></option>
                                    <option value="1" selected>111111 Alexis Jesus Peralta Holyoak</option>
                                    <option value="2">333333 minaya</option>
                                </select>
                                <span class="input-group-btn">
                                    <a href="{{route('pacientes.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="fechaEvaluacion">  Fecha de evaluación</label>
                            <div class="input-group">
                                <input type="text" name="fechaEvaluacion" value="17/08/2017" class="form-control has-feedback-left" data-date-end-date="0d" readonly>
                                <span class="fa fa-calendar-o form-control-feedback left"></span>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>



                    <!--PARTE EN DONDE SE SELECCIONAN TODOS LOS SERVICIOS PARA LA COMPROBANTE-->
                    <div class="input_fields_wrap">
                        <div class="form-group">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="nombre">Nombre de la empresa</label>
                                <input type="text" class="form-control" name="nombre[]" value="">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="areaTrabajo">Área de trabajo</label>
                                <input type="text" class="form-control" name="areaTrabajo[]" value="">
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="ocupacion">Ocupación</label>
                                <input type="text" class="form-control" name="ocupacion[]" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label for="fechaInicio">Fecha de inicio</label>
                                <div class="input-group">
                                    <input type="text" name="fechaInicio[]" class="dtp1 form-control has-feedback-left" data-date-today-highlight="true" >
                                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label for="fechaFin">Fecha de término</label>
                                <div class="input-group">
                                    <input type="text" name="fechaFin[]" class="dtp1 form-control has-feedback-left" data-date-today-highlight="true" >
                                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label for="exposicion">Exposición</label>
                                <div class="input-group">
                                    <input type="checkbox" class="bts-togg" name="exposicion[]"  data-on="Si" data-off="No"/>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2 col-xs-12">
                                <label for="epp">EPP</label>
                                <div class="input-group">
                                    <input type="checkbox" class="bts-togg" name="epp[]"  data-on="Si" data-off="No"/>
                                </div>
                            </div>
                            <div class="col-md-1 col-sm-1 col-xs-12">
                                <label for=""> </label>
                                <button type="button" name="button" class="form-control btn btn-danger fa fa-trash remove_field"></button>
                            </div>
                        </div>
                    </div>
                    <!--PARTE EN DONDE SE SELECCIONAN TODOS LOS SERVICIOS PARA LA COMPROBANTE-->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <button type="button" name="button" class="btn btn-success add_field_button">Agregar empresa anterior</button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator"></div>


                    <div class="form-group">
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <a href="{{route('ocupacional.index')}}" class="btn btn-danger">Cancelar</a>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <div class="col-md-4 col-sm-4 col-xs-12"></div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <a href="{{route('ocupacional.servicios.create')}}" class="btn btn-primary">Guardar</a>
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
    //for add more items
    $(add_button).click(function(e){ //on add input button click
       e.preventDefault();
       $(wrapper).append('<div class="separator"></div><div class="form-group">'
 +'<div class="col-md-4 col-sm-4 col-xs-12"><label for="nombre">Nombre de la empresa</label>'
 +'<input type="text" class="form-control" name="nombre[]" value="">'
 +'</div><div class="col-md-4 col-sm-4 col-xs-12">'
 +'<label for="areaTrabajo">Área de trabajo</label><input type="text" class="form-control" name="areaTrabajo[]" value=""></div>'
 +'<div class="col-md-4 col-sm-4 col-xs-12"><label for="ocupacion">Ocupación</label>'
 +'<input type="text" class="form-control" name="ocupacion[]" value="">'
 +'</div></div>'
 +'<div class="form-group">'
 +'<div class="col-md-3 col-sm-3 col-xs-12"><label for="fechaInicio">Fecha de inicio</label>'
 +'<div class="input-group">'
 +'             <input type="text" name="fechaInicio[]" class="form-control has-feedback-left" data-date-today-highlight="true" >'
 +'<span class="fa fa-calendar-o form-control-feedback left"></span>'
 +'</div>'
 +'</div><div class="col-md-3 col-sm-3 col-xs-12">'
 +'<label for="fechaFin">Fecha de término</label>'
 +' <div class="input-group">'
 +'             <input type="text" name="fechaFin[]" class="form-control has-feedback-left" data-date-today-highlight="true" >'
 +'      <span class="fa fa-calendar-o form-control-feedback left"></span>'
 +'        </div></div><div class="col-md-2 col-sm-2 col-xs-12">'
 +'       <label for="exposicion">Exposición</label><div class="input-group"><input type="checkbox" class="bts-togg" name="exposicion[]"  data-on="Si" data-off="No"/>'
 +'                </div>'
 +' </div><div class="col-md-2 col-sm-2 col-xs-12"> '
 +'          <label for="epp">EPP</label>   '
 +'                     <div class="input-group">'
 +'                                 <input type="checkbox" class="bts-togg" name="epp[]"  data-on="Si" data-off="No"/></div></div>'
 +'                  <div class="col-md-1 col-sm-1 col-xs-12"><label for=""> </label> <button type="button" name="button" class="form-control btn btn-danger fa fa-trash remove_field"></button></div>'
 +'              </div>');
       selection();
       toggler();
    });
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
       e.preventDefault(); $(this).closest('div[class^="form-group"]').remove();
   })
});
</script>
@endsection
