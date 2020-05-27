<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
    protected $table = 'Clientes';
    
    public function Clientes(){
        return $this->hasMany('App\Clientes');
        }
}