<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleFactura extends Model
{
    

   

    	protected $table= 'detalleFactura';
    	protected $fillable = ['id_factura','cantidad','unidadMedidad','detalle','precioUnitario','montoTotal','SubTotal','monTotalLinea','montoDescuento','naturalezaDescuento',

          
    ];
    protected $guarded = ['id'];
     public function facturas(){

    	return $this->belongsToMany(Factura::class);
    }
}
