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
  Route::get('/', 'PacientesController@index')->name('index');
  Route::get('create', 'PacientesController@create')->name('create');
  Route::post('store', 'PacientesController@store')->name('store');
  Route::get('edit/{id}', 'PacientesController@edit')->name('edit');
  Route::post('update/{id}', 'PacientesController@update')->name('update');
  Route::post('delete/{id}', 'PacientesController@delete')->name('delete');
  Route::post('destroy/{id}', 'PacientesController@destroy')->name('destroy');
  Route::get('show/{id}', 'PacientesController@show')->name('show');
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
/*SUBCLASES*/

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
/*CPTS*/
Route::group(['prefix'=>'cpts','as'=>'cpts.'],function(){
  Route::get('/','CptsController@index')->name('index');
  Route::get('create','CptsController@create')->name('create');
  Route::post('store','CptsController@store')->name('store');
  Route::get('edit/{id}','CptsController@edit')->name('edit');
  Route::post('update/{id}','CptsController@update')->name('update');
});
/*INCENTIVO*/
Route::group(['prefix'=>'incentivos','as'=>'incentivos.'],function(){
  Route::get('/',function(){
    return view('admin.incentivos.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.incentivos.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.incentivos.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.incentivos.show');
  })->name('show');
});
/*DESCUENTO*/
Route::group(['prefix'=>'descuentos','as'=>'descuentos.'],function(){
  Route::get('/',function(){
    return view('admin.descuentos.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.descuentos.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.descuentos.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.descuentos.show');
  })->name('show');
});
/*DESCUENTO*/
Route::group(['prefix'=>'sueldos','as'=>'sueldos.'],function(){
  Route::get('/',function(){
    return view('admin.sueldos.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.sueldos.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.sueldos.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.sueldos.show');
  })->name('show');
});
/*USUARIOS*/
Route::group(['prefix'=>'usuarios','as'=>'usuarios.'],function(){
  Route::get('/',function(){
    return view('admin.usuarios.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.usuarios.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.usuarios.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.usuarios.show');
  })->name('show');
});
/*SOLICITUDES*/
Route::group(['prefix'=>'solicitudes','as'=>'solicitudes.'],function(){
  Route::get('/',function(){
    return view('admin.solicitudes.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.solicitudes.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.solicitudes.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.solicitudes.show');
  })->name('show');
});
/*EXAMENES*/
Route::group(['prefix'=>'examenes','as'=>'examenes.'],function(){
  Route::get('/',function(){
    return view('admin.examenes.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.examenes.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.examenes.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.examenes.show');
  })->name('show');
});
/*INVENTARIO*/
Route::group(['prefix'=>'inventarios','as'=>'inventarios.'],function(){
  Route::get('/',function(){
    return view('admin.inventarios.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.inventarios.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.inventarios.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.inventarios.show');
  })->name('show');
});
/*INVENTARIO*/
Route::group(['prefix'=>'normales','as'=>'normales.'],function(){
  Route::get('/',function(){
    return view('admin.normales.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.normales.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.normales.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.normales.show');
  })->name('show');
});
/*MATERIALES*/
Route::group(['prefix'=>'materiales','as'=>'materiales.'],function(){
  Route::get('/',function(){
    return view('admin.materiales.index');
  })->name('index');
  Route::get('create',function(){
    return view('admin.materiales.create');
  })->name('create');
  Route::get('update',function(){
    return view('admin.materiales.update');
  })->name('update');
  Route::get('show',function(){
    return view('admin.materiales.show');
  })->name('show');
});
/*PACIENTE OCUPACIONAL*/
Route::group(['prefix'=>'ocupacional','as'=>'ocupacional.'],function(){
    Route::group(['prefix'=>'empresa','as'=>'empresa.'],function(){
        Route::get('create',function(){
            return view('admin.ocupacional.empresa.create');
        })->name('create');
    });
    Route::group(['prefix'=>'servicios','as'=>'servicios.'],function(){
        Route::get('create',function(){
            return view('admin.ocupacional.servicios.create');
        })->name('create');
        Route::get('edit',function(){
            return view('admin.ocupacional.servicios.edit');
        })->name('edit');
    });
    Route::get('/',function(){
        return view('admin.ocupacional.index');
    })->name('index');
    Route::get('create',function(){
        return view('admin.ocupacional.create');
    })->name('create');
    Route::get('update',function(){
        return view('admin.ocupacional.update');
    })->name('update');
    Route::get('show',function(){
        return view('admin.ocupacional.show');
    })->name('show');
});
/*MEDICOS*/
Route::group(['prefix'=>'medicos','as'=>'medicos.'],function(){
  Route::get('/','MedicosController@index')->name('index');
  Route::get('create','MedicosController@create')->name('create');
  Route::get('edit/{id}','MedicosController@edit')->name('edit');
  Route::post('store', 'MedicosController@store')->name('store');
  Route::post('update/{id}', 'MedicosController@update')->name('update');
  Route::post('delete/{id}', 'MedicosController@delete')->name('delete');
  Route::post('destroy/{id}', 'MedicosController@destroy')->name('destroy');
});
Route::group(['prefix'=>'inventario','as'=>'inventario.'],function(){
  Route::get('/',function(){
      return view('admin.inventario.index');
  })->name('index');
  Route::get('create',function(){
      return view('admin.inventario.create');
  })->name('create');
  Route::get('edit',function(){
      return view('admin.inventario.edit');
  })->name('edit');
  Route::get('show',function(){
      return view('admin.inventario.show');
  })->name('show');
});
Route::group(['prefix'=>'empresas','as'=>'empresas.'],function(){
  Route::get('/',function(){
      return view('admin.empresas.index');
  })->name('index');
  Route::get('create',function(){
      return view('admin.empresas.create');
  })->name('create');
  Route::get('edit',function(){
      return view('admin.empresas.edit');
  })->name('edit');
  Route::get('show',function(){
      return view('admin.empresas.show');
  })->name('show');
});
