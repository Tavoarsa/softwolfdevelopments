<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdenTrabajo extends Model
{
   protected $table= 'ordenestrabajos';
   protected $fillable = [

        'orden_num', 'id_finca','id_equipo','fecha_visita','descripcion_servicio','detalle_Servicio','costo_servicio','costo_kilometraje','total_orden','plazo_credito','responsable_finca','realizado','status'    
    ];
    protected $guarded = ['id'];

public function Finca()
{
    return $this->belongsTo(Finca::class);
}

public function Equipo()
{
    return $this->belongsTo(Equipo::class);
}
}
