<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoConsultoriaController extends Controller
{
    public function pedidoConsultoria(Request $request){
        //dd($request);
        return view('site.index');
    }
}
