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
    return view('welcome');
});
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
