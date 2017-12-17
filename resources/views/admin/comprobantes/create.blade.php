@extends('admin.layouts.admin')

@section('title', 'Comprobantes')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar comprobantes</h2>
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
            Bienvenido a la seccion de registro de comprobantes, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="pacientes">Paciente</label>
                <div class="input-group input-group-sm">
                  <select class="form-control special2" style="width: 100%;" name="pacientes">
                    <option value=""></option>
                    <option value="1">111111 Alexis Jesus Peralta Holyoak</option>
                    <option value="2">333333 minaya</option>
                  </select>
                  <span class="input-group-btn">
                      <a href="{{route('pacientes.create')}}" class="btn btn-default"><i class="fa fa-plus"></i> </a>
                  </span>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="tipo">Tipo</label>
              <select class="form-control" name="tipo">
                <option value="1">Boleta</option>
                <option value="2">Factura</option>
              </select>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <label for="serie">Serie</label>
              <select class="form-control" name="tipo">
                <option value="1">B001</option>
                <option value="2">B002</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="numero">Numero</label>
              <input type="text" name="numero" value="" disabled class="form-control">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="fecha">Fecha emision</label>
              <div class="input-group">
                <input type="text" name="fecha" id="dtp1" class="form-control has-feedback-left" data-date-today-highlight="true" >
                <span class="fa fa-calendar-o form-control-feedback left"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-1 col-sm-1 col-xs-12">
              <label for="moneda">Moneda</label>
              <select class="form-control" style="width: 100%;" name="moneda">
                <option value="1">S/</option>
                <option value="2">US$</option>
                <option value="2">€</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="cambio">Tipo de cambio</label>
              <input type="number" name="cambio" value="" class="form-control">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="financiador">Tipo de financiador</label>
              <input type="text" name="financiador" value="" class="form-control" disabled>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
              <label for="hc">Verifica Hc </label>
              <div class="input-group">
                <input type="checkbox" class="bts-togg" checked name="hc[]"  data-on="Si" data-off="No"/>
              </div>
            </div>
          </div>
          <div class="separator"></div>
          <!--PARTE EN DONDE SE SELECCIONAN TODOS LOS SERVICIOS PARA LA COMPROBANTE-->
          <div class="input_fields_wrap">
            <div class="form-group">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="servicio">Servicio</label>
                <select class="form-control special2" style="width: 100%;" name="servicio[]">
                  <option value=""></option>
                  <option value="1">Hematologia</option>
                  <option value="2">Hemograma</option>
                </select>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="unit">Valor unit.</label>
                <input type="number" name="unit[]" value="" class="form-control" disabled>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad[]" value="" class="form-control">
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="subtotal">Sub total</label>
                <input type="number" name="subtotal[]" value="" class="form-control" disabled>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="descuento">Descuento</label>
                <input type="number" name="descuento[]" value="" class="form-control">
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="total">Total</label>
                <input type="number" name="total[]" value="" class="form-control" disabled>
              </div>
              <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="total"> </label>
                <button type="button" name="button" class="form-control btn btn-danger fa fa-trash remove_field"></button>
              </div>
            </div>
          </div>
          <!--PARTE EN DONDE SE SELECCIONAN TODOS LOS SERVICIOS PARA LA COMPROBANTE-->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <button type="button" name="button" class="btn btn-primary add_field_button">Agregar linea o item</button>
          </div>
          <div class="clearfix"></div>
          <div class="separator"></div>
          <div class="form-group">
            <div class="col-md-7 col-sm-7 col-xs-12">
              <label for="observacion" class="control-label">Observación</label>
              <textarea name="observacion" rows="8" cols="80" class="form-control" style="resize:none;"></textarea>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="form-group">
                <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Total Bruto</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" name="" value="" class="form-control" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Igv</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" name="" value="" class="form-control" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Neto</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" name="" value="" class="form-control" disabled>
                </div>
              </div>
              <div class="form-group">
                <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Paga con</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" name="" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="localidad" class="control-label col-md-3 col-sm-3 col-xs-12">Vuelto</label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" name="" value="" class="form-control" disabled>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary form-control">Crear documento</button>
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
