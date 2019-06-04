<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table= 'insumos_utilizados';
   protected $fillable = [

        'id_ordem', 'id_producto','nombre_producto','precio_venta'  
    ];
    protected $guarded = ['id'];

    public function insumo(){

    	return $this->belongsTo('App\OrdenTrabajo');
    }
}
