<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
    //
    protected $table = 'Bicicletas';

    public function Bicicletas(){
        return $this->hasMany('App\Bicicletas');
    }
}