<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos_venta extends Model
{
    use HasFactory;

    protected $fillable = ['productos_id', 'ventas_id', 'cantidad','precio','subtotal'];

    public function productos()
    {
        return $this->hasMany('App\Models\producto');
    }
    public function ventas()
    {
        return $this->hasOne('App\Models\ventas');
    }
}
