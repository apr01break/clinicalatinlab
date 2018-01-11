<?php

namespace clinicalatinlab\Http\Controllers;

use Illuminate\Http\Request;
use clinicalatinlab\Medico;

class MedicosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $medicos = Medico::where('estado',1)->get();
      return view('admin.medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.medicos.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'nombre' => 'required'
      ]);
      $medico = new Medico();
      $medico->nombre = $request->nombre;
      $medico->estado = 1;
      $medico->nombreUsuario = 'falta agregar';
      $medico->save();
      return redirect('/medicos');
    }



    public function edit($id)
    {
      $medico = Medico::findOrFail($id);

      return view('admin.medicos.edit', compact('medico'));
    }


    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'nombre' => 'required'
      ]);
      $medico = Medico::findOrFail($id);
      $medico->nombre = $request->nombre;
      $medico->save();

      return redirect('/medicos');
    }


    public function destroy($id)
    {
        //
    }
}
