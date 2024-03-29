<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;

    protected $table = 'cotizaciones';
    protected $primaryKey = 'id';
    protected $dates = ['created_at', 'updated_at'];

    protected $guarded = [];

    public function detalles()  {
        return $this->hasMany('App\Models\Detalle');
    }

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function producto() {
        return $this->belongsTo('App\Models\Producto');
    }
}
