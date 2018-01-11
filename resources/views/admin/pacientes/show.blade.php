@extends('admin.layouts.admin')

@section('title', 'Pacientes')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar paciente</h2>
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
            Bienvenido a la seccion de registro de empresas, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>

          <div class="form-group">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <label for="prNombre">Primer Nombre</label>
                <input readonly type="text" class="form-control" name="prNombre" value="{{$paciente->persona->prNombre}}" required>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <label for="sgNombre">Segundo Nombre</label>
                <input readonly type="text" class="form-control" name="sgNombre" value="{{$paciente->persona->sgNombre}}">
            </div>
            <div class="col-md-3 col-sm-2 col-xs-12">
                <label for="aPaterno">Apellido Paterno</label>
                <input readonly type="text" name="aPaterno" class="form-control" value="{{$paciente->persona->aPaterno}}" required>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12">
                <label for="aMaterno">Apellido Materno</label>
                <input readonly type="text" name="aMaterno" class="form-control" value="{{$paciente->persona->aMaterno}}" required>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="sexo">Sexo</label>
                <div class="input-group">
                  <div class="btn-group" data-toggle="">
                    <label class="btn btn-default">
                      <input type="radio" name="sexo" value="masculino" disabled> Masculino
                    </label>
                    <label class="btn btn-default">
                      <input type="radio" name="sexo" value="femenino" disabled> Femenino
                    </label>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <div class="input-group">
                  <input readonly type="text" name="fechaNacimiento" value="{{$paciente->persona->fechaNacimiento}}" class="form-control has-feedback-left" data-date-end-date="0d">
                  <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="lugarNacimiento_id">Lugar de Nacimiento</label>
                <select disabled class="form-control special2" style="width: 100%;" name="lugarNacimiento_id" required>
                    <option value=""></option>
                    @foreach($distritos as $distrito)
                    <option value="{{$distrito->id}}"
                      @if($distrito->id == $paciente->persona->lugarNacimiento_id)
                      selected="selected"
                      @endif
                      >{{$distrito->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="discapacitado">Discapacitado</label>
              <div class="input-group">
                @if($paciente->persona->discapacitado == true)
                <input readonly type="checkbox" class="bts-togg" name="discapacitado"  data-on="Si" data-off="No" checked/>
                @else
                <input readonly type="checkbox" class="bts-togg" name="discapacitado"  data-on="Si" data-off="No"/>
                @endif
              </div>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="tipoDocum">Tipo de documento</label>
                <select disabled class="form-control" id="tipoDocum" name="tipoDocum">
                  <option value="DNI">DNI</option>
                  <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="nroDocum">Numero de documento</label>
                <input readonly type="text" name="nroDocum" class="form-control" value="{{$paciente->persona->nroDocum}}">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="direccion">Dirección</label>
                <input readonly type="text" name="direccion" class="form-control" value="{{$paciente->persona->direccion}}">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="nroDirecc">Número</label>
                <input readonly type="text" name="nroDirecc" class="form-control" value="{{$paciente->persona->nroDirecc}}">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="intDirecc">Interior</label>
                <input readonly type="text" name="intDirecc" class="form-control" value="{{$paciente->persona->intDirecc}}">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="mzaDirecc">Manzana</label>
                <input readonly type="text" name="mzaDirecc" class="form-control" value="{{$paciente->persona->mzaDirecc}}">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="lotDirecc">Lote</label>
                <input readonly type="text" name="lotDirecc" class="form-control" value="{{$paciente->persona->lotDirecc}}">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroTelefono">N° Teléfono Fijo</label>
                  <input readonly type="text" name="nroTelefono" class="form-control" value="{{$paciente->persona->nroTelefono}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroCelular">N° Celular</label>
                <input readonly type="text" name="nroCelular" class="form-control" value="{{$paciente->persona->nroCelular}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroTrabajo">N° Trabajo</label>
                <input readonly type="text" name="nroTrabajo" class="form-control" value="{{$paciente->persona->nroTrabajo}}" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="residencia_id">Lugar de Residencia</label>
                <select disabled class="form-control special2" style="width: 100%;" name="lugarNacimiento_id" required>
                  @foreach($distritos as $distrito)
                  <option value="{{$distrito->id}}"
                    @if($distrito->id == $paciente->persona->lugarNacimiento_id)
                    selected="selected"
                    @endif
                    >{{$distrito->nombre}}</option>
                  @endforeach
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="tipoLocali">Tipo de localidad</label>
                <select disabled class="form-control" id="tipoLocali" name="tipoLocali">
                  <option value="A.A.H.H">A.A.H.H</option>
                  <option value="Ciudad">Ciudad</option>
                  <option value="Residencial">Residencial</option>
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nombLocali">Nombre de localidad</label>
                <input readonly type="text" name="nombLocali" class="form-control" value="{{$paciente->persona->nombLocali}}">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="tipoFinanciador">Tipo de Financiador</label>
                <select disabled id="tipoFinanciador" class="form-control" name="tipoFinanciador">
                  <option value="Convenio">Convenio</option>
                  <option value="Particular">Particular</option>
                </select>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <label for="veterinaria">Veterinaria</label>
              <div class="input-group">
                @if($paciente->veterinaria)
                <input readonly type="checkbox" class="bts-togg" name="veterinaria"  data-on="Si" data-off="No" checked/>
                @else
                <input readonly type="checkbox" class="bts-togg" name="veterinaria"  data-on="Si" data-off="No"/>
                @endif
              </div>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-10 col-sm-10 col-xs-12">
              <label for="observacion">Observación</label>
              <textarea readonly name="observacion" rows="2" cols="80" class="form-control" style="resize:none;">{{$paciente->observacion}}</textarea>
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-10 col-sm-10 col-xs-12">
                  <a href="{{route('pacientes.index')}}" class="btn btn-danger"><i class="glyphicon glyphicon-arrow-left"></i> Regresar</a>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="col-md-4 col-sm-4 col-xs-12"></div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <a href="{{route('pacientes.edit', $paciente->id)}}" class="btn btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</a>
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
<!--bootstrap toggle-->
<link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
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
  function selection(){
    $('.special2').select2({
      placeholder: 'Seleccione uno...',
      theme: "bootstrap"
    });
  }
  function getReadyComponents(){
    $('#tipoFinanciador option[value="{{$paciente->tipoFinanciador}}"]').attr('selected', 'selected');
    $('#tipoLocali option[value="{{$paciente->persona->tipoLocali}}"]').attr('selected', 'selected');
    $('#tipoDocum option[value="{{$paciente->persona->tipoDocum}}"]').attr('selected', 'selected');
    $("input[name=sexo][value='{{$paciente->persona->sexo}}']").prop("checked",true);
  }
  getReadyComponents();
  function toggler(){
    $('.bts-togg').bootstrapToggle();
  }
  function date(){
    $('.dtp1').datepicker();
  }
  date();
  toggler();
  selection();

});
</script>
@endsection
