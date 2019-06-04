<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table= 'facturas';
    protected $fillable = ['emisor_nombre','emisor_tipo_indetif','emisor_num_identif','nombre_comercial','emisor_provincia','emisor_canton','emisor_distrito','emisor_barrio','emisor_otras_senas','emisor_cod_pais_tel','emisor_tel','emisor_cod_pais_fax','emisor_fax','emisor_email','receptor_nombre','receptor_tipo_identif','receptor_num_identif','receptor_provincia','receptor_canton','receptor_canton','receptor_distrito','receptor_barrio','receptor_cod_pais_tel','receptor_tel','receptor_cod_pais_fax','receptor_fax','receptor_email','condicion_venta','plazo_credito','medio_pago','tipo_cambio','tipo_cambio','total_serv_gravados','total_serv_exentos','total_merc_gravada','total_merc_exenta','total_gravados','total_exentos','total_ventas','total_descuentos','total_ventas_neta','total_impuestos','total_comprobante','otros',

          
    ];
    protected $guarded = ['id'];

    public function detalles(){

    	return $this->belongsToMany(DetalleFactura::class);
    }


   
}
