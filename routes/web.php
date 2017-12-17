<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.home.index');
})->name('home');
/*
 **Auth Routes
 */
Route::group(['namespace'=>'Auth'],function(){
  //login
  Route::get('login',function(){
    return view('auth.login');
  })->name('login');
  //reset password
  Route::get('reset',function(){
    return view('auth.reset');
  })->name('reset');
});
/*
**Backend Routes
 */
Route::get('prueba',function(){
  return view('admin.home.index');
});
/*PACIENTE*/
Route::group(['prefix'=>'pacientes','as'=>'pacientes.'],function(){
  Route::get('/',function(){
    return view('admin.pacientes.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.pacientes.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.pacientes.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.pacientes.show');
  })->name('show');
});
/*TARIFARIO*/
Route::group(['prefix'=>'tarifario','as'=>'tarifario.'],function(){
  Route::get('/',function(){
    return view('admin.tarifario.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.tarifario.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.tarifario.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.tarifario.show');
  })->name('show');
});
/*AREAS*/
Route::group(['prefix'=>'areas','as'=>'areas.'],function(){
  Route::get('/',function(){
    return view('admin.areas.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.areas.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.areas.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.areas.show');
  })->name('show');
});
/*UNIDADES DE MEDIDA*/
Route::group(['prefix'=>'medidas','as'=>'medidas.'],function(){
  Route::get('/',function(){
    return view('admin.medidas.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.medidas.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.medidas.update');
  })->name('update');
});
/*CLASES*/
Route::group(['prefix'=>'clases','as'=>'clases.'],function(){
  Route::get('/',function(){
    return view('admin.clases.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.clases.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.clases.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.clases.show');
  })->name('show');
});
/*SUBCLASES*/
Route::group(['prefix'=>'subclases','as'=>'subclases.'],function(){
  Route::get('/',function(){
    return view('admin.subclases.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.subclases.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.subclases.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.subclases.show');
  })->name('show');
});
/*BALANCE*/
Route::group(['prefix'=>'balances','as'=>'balances.'],function(){
  Route::get('/','BalanceController@index')->name('index');
  Route::get('create',function(){
    return view('admin.balances.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.balances.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.balances.show');
  })->name('show');
});
/*RAZONES FINANCIERAS*/
Route::group(['prefix'=>'financieras','as'=>'financieras.'],function(){
  Route::get('/',function(){
    return view('admin.financieras.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.financieras.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.financieras.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.financieras.show');
  })->name('show');
});
/*EMPLEADOS*/
Route::group(['prefix'=>'empleados','as'=>'empleados.'],function(){
  Route::get('/',function(){
    return view('admin.empleados.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.empleados.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.empleados.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.empleados.show');
  })->name('show');
});
/*COMPROBANTES*/
Route::group(['prefix'=>'comprobantes','as'=>'comprobantes.'],function(){
  Route::get('/',function(){
    return view('admin.comprobantes.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.comprobantes.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.comprobantes.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.comprobantes.show');
  })->name('show');
});
/*COMPROBANTES*/
Route::group(['prefix'=>'cpts','as'=>'cpts.'],function(){
  Route::get('/',function(){
    return view('admin.cpts.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.cpts.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.cpts.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.cpts.show');
  })->name('show');
});
