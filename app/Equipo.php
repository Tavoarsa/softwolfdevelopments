<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
     protected $fillable = [

        'nombreE', 'descripcionE','categoriaE','serie','modelo','puestos','finca_id', 
    ];

    protected $guarded = ['id'];

    public static function equipos($id){

    	return Equipo::where('finca_id','=',$id)->get();


    }
}
