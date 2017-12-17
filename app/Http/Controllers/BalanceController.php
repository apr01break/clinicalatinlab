<?php

namespace clinicalatinlab\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
class BalanceController extends Controller
{
    public function _construct(){

    }
    public function index(){
      $chart = Charts::multi('bar', 'highcharts')
            // Setup the chart settings
            ->title("Ingresos y egresos")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Ingreso', [50,20,100,200,100,90,10,60,70,150,30,80])
            ->dataset('Egreso', [150,30,80,30,50,90,200,100,90,10,60,70])
            // Setup what the values mean
            ->labels(['Enero', 'Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Setiembre','Octubre','Noviembre','Diciembre'])
            ->responsive(true);

        return view('admin.balances.index', ['chart' => $chart]);
    }
}
