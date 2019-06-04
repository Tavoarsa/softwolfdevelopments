<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	 protected $fillable = [

        'categoria_id', 'proveedor','nombreP','cantidad', 'precioCompra','precioVenta', 

        ];

    protected $guarded = ['id'];

   

public function Categoria()
{
    return $this->belongsTo(Categoria::class);
}

}
