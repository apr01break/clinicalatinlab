@extends('admin.layouts.admin')

@section('title', 'Pacientes')
@section('title-right')
<div>
  <a href="{{route('pacientes.create')}}" class="btn btn-primary">Registrar paciente</a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registros de pacientes</h2>
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
            Bienvenido a la seccion de administracion de pacientes, aqui podra registrar, visualizar, actualizar o eliminar un paciente.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Nombre</th>
                      <th>Historia</th>
                      <th>DNI</th>
                      <th>Fecha de Nacimiento</th>
                      <th data-priority="2" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pacientes as $paciente)
                    <tr>
                      <td>{{$paciente->persona->aPaterno}} {{$paciente->persona->aMaterno}} {{$paciente->persona->prNombre}} {{$paciente->persona->sgNombre}}</td>
                      <td>{{$paciente->numeroHistoria}}</td>
                      <td>{{$paciente->persona->nroDocum}}</td>
                      <td>{{$paciente->persona->fechaNacimiento}}</td>
                      <td><a href="{{route('pacientes.show', $paciente->id)}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('pacientes.edit', $paciente->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs btn-delete" data-toggle="modal" data-target="#bs-delete-modal-lg" data-id="{{$paciente->id}}"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.pacientes.delete')
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--DataTable-->
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vfs_fonts.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(document).on('click', '.btn-delete',function(){
        let idPaciente = $(this).data('id');
        let url='pacientes/delete/'+idPaciente;
        $.ajax({
          dataType : 'json',
          method : 'post',
          url : url,
          data : {},
          success : function(data){
            $('#mdl-delete p[name="nombre"]').text(data.persona.aPaterno+" "+data.persona.aMaterno+" "+data.persona.prNombre+" "+data.persona.sgNombre);
            $('#mdl-delete p[name="dni"]').text(data.persona.nroDocum);
            $('#mdl-delete p[name="historia"]').text(data.numeroHistoria);
            $('#mdl-delete').attr('action','pacientes/destroy/'+idPaciente);
          }
        });
    });
    $("#t_data_tables").DataTable({
    dom: 'Bfrtip',
    buttons:[{
      extend: 'pdf',
         footer: true,
         title:'Reporte de pacientes',
         exportOptions: {
              columns: [0,1,2,3,4]
          }
    },
    {
          extend: 'excel',
          title:'Reporte de pacientes',
          exportOptions: {
              columns: [0,1,2,3.4]
           }
    },
    {
          extend: 'print',
          title:'Reporte de pacientes',
          exportOptions: {
              columns: [0,1,2,3,4]
           }
    }]
  });
});
</script>
@endsection
