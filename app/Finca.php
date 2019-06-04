<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Finca extends Model
{
     protected $fillable = [

        'nombreF', 'descripcionF','id_user', 
    ];

    protected $guarded = ['id'];

    public function Usuario()
{
    return $this->belongsTo(User::class);
}
}
