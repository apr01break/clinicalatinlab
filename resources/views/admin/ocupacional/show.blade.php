    @extends('admin.layouts.admin')

    @section('title', 'Pacientes Ocupacionales')
    @section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Datos de paciente ocupacional</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <form class="form-horizontal form-label-left" action="" method="post">
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
                    <label for="tipoEvaluacion1">Tipo Evaluación</label>
                    <select class="form-control" name="" disabled>
                      <option value="" >Pre-Ocupacional</option>
                      <option value="">Ocupacional</option>
                    </select>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="tipoEvaluacion2">Tipo Evaluación</label>
                    <select class="form-control" name="" disabled>
                      <option value="">Ingreso</option>
                      <option value="">Periódico</option>
                    </select>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="fechaEvaluacion">  Fecha de evaluación</label>
                    <div class="input-group">
                        <input type="text" name="" readonly value="10/12/2017" class="form-control has-feedback-left" data-date-end-date="0d">
                        <span class="fa fa-calendar-o form-control-feedback left"></span>
                    </div>
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
                    <select class="form-control" name="" disabled>
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
                    <input type="text" class="form-control" name="" value="abc@gmail.com" readonly>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="estadoCivil">Estado civil</label>
                    <select class="form-control" name="" disabled>
                      <option value="">Soltero</option>
                      <option value="" selected>Casado</option>
                      <option value="">Conviviente</option>
                      <option value="">Viudo</option>
                      <option value="">Divorciado</option>
                    </select>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <label for="gradoInstruccion">Grado de instrucción</label>
                    <select class="form-control" name="" disabled>
                      <option value="">Primaria incompleta</option>
                      <option value="">Primaria completa</option>
                      <option value="" selected>Secundaria incompleta</option>
                      <option value="">Secundaria completa</option>
                      <option value="">Tercio superios incompleto</option>
                      <option value="">Tercio superios completo</option>
                    </select>
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
              <div class="col-md-10 col-sm-10 col-xs-12"></div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                <button type="button" class="btn btn-warning btn-sm">Editar</button>
                <button type="button" name="button" type="submit" class="btn btn-success btn-sm" disabled>Guardar</button>
              </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Empresas anteriores</h2>
                <ul class="nav navbar-right panel-toolbox">
                    <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="display: block;">
                <form class="form-horizontal form-label-left" action="" method="post">
                    <div class="input_fields_wrap">
                        <div class="form-group">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="nombre">Nombre de la empresa</label>
                                <input type="text" class="form-control" name="" value="Inversiones JB" readonly>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="areaTrabajo">Área de trabajo</label>
                                <input type="text" class="form-control" name="" value="Reparto" readonly>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label for="ocupacion">Ocupación</label>
                                <input type="text" class="form-control" name="" value="Repartidor" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label for="fecha">Fecha de inicio</label>
                                <div class="input-group">
                                    <input type="text" name="" value="03/01/2017" class="form-control has-feedback-left" data-date-today-highlight="true" readonly>
                                    <span class="fa fa-calendar-o form-control-feedback left"></span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <label for="fechaFin">Fecha de término</label>
                                <div class="input-group">
                                    <input type="text" name="" value="03/10/2017" class="form-control has-feedback-left" data-date-today-highlight="true" readonly>
                                <span class="fa fa-calendar-o form-control-feedback left"></span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label for="exposicion">Exposición</label>
                            <div class="input-group">
                                <input type="checkbox" class="bts-togg" name="exposicion[]"  data-on="Si" data-off="No" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label for="epp">EPP</label>
                            <div class="input-group">
                                <input type="checkbox" class="bts-togg" name="epp[]"  data-on="Si" data-off="No" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <label for=""> </label>
                          <div class="">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                            <button type="button" name="button" type="submit" class="btn btn-success btn-sm" disabled>Guardar</button>
                          </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="nombre">Nombre de la empresa</label>
                            <input type="text" class="form-control" name="" value="Importaciones HC" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="areaTrabajo">Área de trabajo</label>
                            <input type="text" class="form-control" name="" value="Planta" readonly>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <label for="ocupacion">Ocupación</label>
                            <input type="text" class="form-control" name="" value="Supervisor" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <label for="fecha">Fecha de inicio</label>
                            <div class="input-group">
                                <input type="text" name="" value="12/04/2016" class="form-control has-feedback-left" data-date-today-highlight="true" readonly>
                                <span class="fa fa-calendar-o form-control-feedback left"></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <label for="fechaFin">Fecha de término</label>
                            <div class="input-group">
                                <input type="text" name="" value="12/10/2016" class="form-control has-feedback-left" data-date-today-highlight="true" readonly>
                                <span class="fa fa-calendar-o form-control-feedback left"></span>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label for="exposicion">Exposición</label>
                            <div class="input-group">
                                <input type="checkbox" class="bts-togg" name="exposicion[]"  data-on="Si" data-off="No" disabled checked/>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <label for="epp">EPP</label>
                            <div class="input-group">
                                <input type="checkbox" class="bts-togg" name="epp[]"  data-on="Si" data-off="No" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                          <label for=""> </label>
                          <div class="">
                            <button type="button" class="btn btn-warning btn-sm">Editar</button>
                            <button type="button" name="button" type="submit" class="btn btn-success btn-sm" disabled>Guardar</button>
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                          <a class="btn btn-primary btn-sm" href="{{route('ocupacional.empresa.create')}}">Agregar empresa anterior</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Servicios Ocupacionales</h2>
                <ul class="nav navbar-right panel-toolbox">
                    <li>
                        <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content" style="display: block;">

              <div class="form-group">
                <div class="btn-group btn-group-justified" role="group" >
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">EKG</button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">ESPIRO</button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">OFTALMO</button>
                  </div>
                </div>
                <div class="btn-group btn-group-justified" role="group" >
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">ODONTO</button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default">MEDICINA</button>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-11 col-sm-11 col-xs-12"></div>
                <div class="col-md-1 col-sm-1 col-xs-12">
                  <a class="btn btn-warning btn-sm" href="{{route('ocupacional.servicios.edit')}}">Editar</a>
                </div>
              </div>
              <div class="clearfix"></div>

            </div>
        </div>
        <div class="form-group">
            <div class="col-md-10 col-sm-10 col-xs-12">
                <a href="{{route('ocupacional.index')}}" class="btn btn-danger">Regresar</a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <button type="button" name="button" type="submit" class="btn btn-primary">Resultados</button>
                </div>
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
