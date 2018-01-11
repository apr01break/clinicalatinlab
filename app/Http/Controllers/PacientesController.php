<?php

namespace clinicalatinlab\Http\Controllers;

use Illuminate\Http\Request;
use clinicalatinlab\Persona;
use clinicalatinlab\Paciente;
use clinicalatinlab\Distrito;
use \Datetime;

class PacientesController extends Controller
{
  public function _construct(){

  }
  public function index(){
    $pacientes = Paciente::where('estado',1)->with('persona')->get();
    return view('admin.pacientes.index', compact('pacientes'));
  }
  public function create(){
    $distritos = Distrito::all();
    return view('admin.pacientes.create', compact('distritos'));
  }
  public function store(Request $request){
    $this->validate($request,[
      'prNombre' => 'required',
      'aPaterno' => 'required',
      'aMaterno'=>'required',
      'fechaNacimiento'=> 'required',
      'sexo'=> 'required',
      'tipoDocum'=>'required',
      'nroDocum'=>'required',
      'lugarNacimiento_id'=>'required',
      'residencia_id'=>'required'
    ]);
    $persona = new Persona();
    $persona->prNombre = $request->prNombre;
    $persona->sgNombre = $request->sgNombre;
    $persona->aPaterno = $request->aPaterno;
    $persona->aMaterno = $request->aMaterno;
    $myDateTime = DateTime::createFromFormat('m/d/Y', $request->fechaNacimiento);
    $persona->fechaNacimiento = $myDateTime->format('d-m-Y');
    $persona->lugarNacimiento_id = $request->lugarNacimiento_id;
    $persona->sexo = $request->sexo;
    $persona->tipoDocum = $request->tipoDocum;
    $persona->nroDocum = $request->nroDocum;
    $persona->direccion = $request->direccion;
    $persona->nroDirecc = $request->nroDirecc;
    $persona->intDirecc = $request->intDirecc;
    $persona->mzaDirecc = $request->mzaDirecc;
    $persona->lotDirecc = $request->lotDirecc;
    $persona->nroTelefono = $request->nroTelefono;
    $persona->nroCelular = $request->nroCelular;
    $persona->nroTrabajo = $request->nroTrabajo;
    if($request->discapacitado=='on') $persona->discapacitado = $request->discapacitado;
    else $persona->discapacitado = false;

    $persona->tipoLocali = $request->tipoLocali;
    $persona->nombLocali = $request->nombLocali;
    $persona->residencia_id = $request->residencia_id;
    $persona->estado = 1;
    $persona->nombreUsuario = 'falta agregar';
    $persona->save();

    $pers = Persona::where('nroDocum',$request->nroDocum)->first();
    $paciente = new Paciente();
    $paciente->persona_id = $pers->id;
    $pac = Paciente::orderBy('created_at', 'desc')->first();
    $nroHistoria = 0;
    if($pac!==null) $nroHistoria = str_pad( ($pac->id + 1), 8, '0', STR_PAD_LEFT);
    else $nroHistoria = str_pad( 1, 8, '0', STR_PAD_LEFT);
    $paciente->numeroHistoria = $nroHistoria;
    $paciente->tipoFinanciador = $request->tipoFinanciador;
    if($request->veterinaria==true) $paciente->veterinaria = $request->veterinaria;
    else $paciente->veterinaria = false;
    $paciente->observacion = $request->observacion;
    $paciente->estado = 1;
    $paciente->nombreUsuario = 'falta agregar';
    $paciente->save();
    return redirect('/pacientes');
  }
  public function edit($idPaciente){
    $paciente = Paciente::findOrFail($idPaciente);
    $myDateTime = DateTime::createFromFormat('Y-m-d', $paciente->persona->fechaNacimiento);
    $paciente->persona->fechaNacimiento = $myDateTime->format('d/m/Y');
    $distritos = Distrito::all();
    return view('admin.pacientes.edit', compact('paciente','distritos'));
  }
  public function update(Request $request, $idPaciente){
    $this->validate($request,[
      'prNombre' => 'required',
      'aPaterno' => 'required',
      'aMaterno'=>'required',
      'fechaNacimiento'=> 'required',
      'sexo'=> 'required',
      'tipoDocum'=>'required',
      'nroDocum'=>'required',
      'lugarNacimiento_id'=>'required',
      'residencia_id'=>'required'
    ]);
    $paciente = Paciente::findOrFail($idPaciente);
    $paciente->tipoFinanciador = $request->tipoFinanciador;
    if($request->veterinaria==true) $paciente->veterinaria = $request->veterinaria;
    else $paciente->veterinaria = false;
    $paciente->observacion = $request->observacion;
    $paciente->save();

    $persona = Persona::findOrFail($paciente->persona_id);
    $persona->prNombre = $request->prNombre;
    $persona->sgNombre = $request->sgNombre;
    $persona->aPaterno = $request->aPaterno;
    $persona->aMaterno = $request->aMaterno;
    $myDateTime = DateTime::createFromFormat('m/d/Y', $request->fechaNacimiento);
    $persona->fechaNacimiento = $myDateTime->format('d-m-Y');
    $persona->lugarNacimiento_id = $request->lugarNacimiento_id;
    $persona->sexo = $request->sexo;
    $persona->tipoDocum = $request->tipoDocum;
    $persona->nroDocum = $request->nroDocum;
    $persona->direccion = $request->direccion;
    $persona->nroDirecc = $request->nroDirecc;
    $persona->intDirecc = $request->intDirecc;
    $persona->mzaDirecc = $request->mzaDirecc;
    $persona->lotDirecc = $request->lotDirecc;
    $persona->nroTelefono = $request->nroTelefono;
    $persona->nroCelular = $request->nroCelular;
    $persona->nroTrabajo = $request->nroTrabajo;
    if($request->discapacitado=='on') $persona->discapacitado = $request->discapacitado;
    else $persona->discapacitado = false;
    $persona->tipoLocali = $request->tipoLocali;
    $persona->nombLocali = $request->nombLocali;
    $persona->residencia_id = $request->residencia_id;
    $persona->save();

    return redirect('/pacientes');
  }
  public function destroy($idPaciente){
    $paciente = Paciente::findOrFail($idPaciente);
    $paciente->estado = 0;
    $paciente->save();
    return redirect('/pacientes');
  }
  public function show($idPaciente){
    $paciente = Paciente::findOrFail($idPaciente);
    $myDateTime = DateTime::createFromFormat('Y-m-d', $paciente->persona->fechaNacimiento);
    $paciente->persona->fechaNacimiento = $myDateTime->format('d/m/Y');
    $distritos = Distrito::all();
    return view('admin.pacientes.show', compact('paciente','distritos'));
  }
  public function delete($idPaciente){
    $paciente = Paciente::where('id',$idPaciente)->with('persona')->firstOrFail();
    return response()->json($paciente);
  }
}
