<?php

namespace clinicalatinlab\Http\Controllers;

use Illuminate\Http\Request;
use clinicalatinlab\Cpt;

class CptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cpts = Cpt::all();
      return view('admin.cpts.index', compact('cpts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.cpts.create');
    }


    public function store(Request $request)
    {
      $this->validate($request,[
        'descripcion' => 'required'
      ]);
      $cpt = new Cpt();
      $cpt->descripcion = $request->descripcion;
      $cpt->save();
      return redirect('/cpts');
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $cpt = Cpt::findOrFail($id);
      return view('admin.cpts.edit', compact('cpt'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'descripcion' => 'required'
      ]);
      $cpt = Cpt::findOrFail($id);
      $cpt->descripcion = $request->descripcion;
      $cpt->save();
      return redirect('/cpts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
