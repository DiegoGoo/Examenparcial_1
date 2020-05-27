<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bicicletas;

class ShowBicicletas extends Controller
{
    //
    public function get_Bicicletas(){
        //$Bicicletas = Bicicletas::with(['Bicicletas'])->where('id', $id)->get()->toArray();
        $Bicicletas = Bicicletas::all()->toArray();
        //dd($Bicicletas);
        return view('pages.home', ['Bicicletas' => $Bicicletas]);
    }

    public function get_Bicicleta($id){
        $Bicicleta = Bicicletas::where('id', $id)->get()->toArray();
        dd($Bicicleta);
    }
        
}

