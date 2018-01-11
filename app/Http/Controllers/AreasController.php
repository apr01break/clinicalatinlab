<?php

namespace clinicalatinlab\Http\Controllers;

use Illuminate\Http\Request;

use clinicalatinlab\Area;

class AreasController extends Controller
{

    public function index()
    {
      $areas = Area::all();
      return view('admin.areas.index', compact('areas'));
    }


    public function create()
    {
      return view('admin.areas.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
