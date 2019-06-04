<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Codificacion_mh extends Model
{
	protected $table= 'codificacion_mh';
    protected $fillable = [

        'idProvincia', 'nombreProvincia','idCanton','nombreCanton','idDistrito','nombreDistrito','idBarrio','nombreBarrio', 
    ];
    protected $guarded = ['id'];

    public static function cantones($idProvincia){

    	return Codificacion_mh::where('idProvincia','=',$idProvincia)    				
    						->select('idCanton','nombreCanton')
    						->orderBy('nombreCanton','DESC')
    						->distinct()
    						->get();
    }

    public static function distritos($idCanton,$provincia){

    	return Codificacion_mh::where('idProvincia','=',$provincia)  
    						->where('idCanton','=',$idCanton)   						
    						->select('idDistrito','nombreDistrito')
    						->orderBy('nombreDistrito','DESC')
    						->distinct()
    						->get();
    }

    public static function barrios($idDistrito){

    	return Codificacion_mh::where('idDistrito','=',$idDistrito)
    						->select('idBarrio','nombreBarrio')
    						->orderBy('nombreBarrio','DESC')
    						->distinct()
    						->get();
    }
  

}
