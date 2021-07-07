<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/', 'PedidoConsultoriaController@pedidoConsultoria')->name('site.pedido');
Route::post('/', 'PedidoConsultoriaController@pedidoConsultoria')->name('site.pedido');
Route::get('/login', function(){return 'Login';})->name('site.login');
