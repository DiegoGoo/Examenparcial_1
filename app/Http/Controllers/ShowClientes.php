<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clientes;

class ShowClientes extends Controller
{
    //
    public function get_Clientes(){
        $Clientes = Clientes::all()->toArray();
        //dd($Clientes);
        return view('pages.home2', ['Clientes' => $Clientes]);
        }
}
