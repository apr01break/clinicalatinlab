@extends('admin.layouts.admin')

@section('title', 'Servicios ocupacionales')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Asignar servicios ocupacionales</h2>
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
            Bienvenido a la seccion de registro de servicios de pacientes ocupacionales, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>
          <div class="form-group">
              <div class="col-md-4 col-sm-4 col-xs-12">
                  <label for="pacientes">Paciente</label>
                  <div class="input-group input-group-sm">
                      <select class="form-control special2" style="width: 100%;" name="pacientes" disabled>
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
                      <input type="text" name="" value="17/08/2017" class="form-control has-feedback-left" data-date-end-date="0d" readonly>
                      <span class="fa fa-calendar-o form-control-feedback left"></span>
                  </div>
              </div>
          </div>
            <div class="form-group">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;" checked>
                        </div>
                        EKG
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;" checked>
                        </div>
                        ESPIRO
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        AUDIO
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        LAB.
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        RX
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;" checked>
                        </div>
                        OFTALMO
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        PSICO
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;" checked>
                        </div>
                        ODONTO
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;" checked>
                        </div>
                        MEDICINA
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        DJ RX (NO GESTANTE)
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        HEMOGRAMA
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        GRUPO Y FACTOR
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        GLUCOSA
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        EOC
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        PARASITOLOGICO X1
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        BK
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        HCG
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        CULT. SEC. NASAL - FARINGEO
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        AGLUTINACIONES
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        VDRL
                    </div>
                    <div class="form-group">
                        <div class="icheckbox_flat-green" style="position: relative;">
                            <input type="checkbox" class="flat" style="position: absolute; opacity: 0;">
                        </div>
                        PARASITOLOGIA X1
                    </div>
                </div>

            </div>
            <div class="form-group">
                <div class="col-md-10 col-sm-10 col-xs-12">
                    <a href="{{route('ocupacional.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="col-md-4 col-sm-4 col-xs-12"></div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <a href="{{route('ocupacional.empresa.create')}}" class="btn btn-primary">Guardar</a>
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
<!--select2-->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--daterangepicker-->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<!--iCheck-->
<link rel="stylesheet" href="{{asset('css/green.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--iCheck-->
<script type="text/javascript" src="{{asset('js/icheck.min.js')}}"></script>
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
    selection();
});
</script>
@endsection
