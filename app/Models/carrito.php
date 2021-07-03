<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;

    protected $fillable = ['productos_id', 'user_id', 'cantidad'];
    
    public function productos()
    {
        return $this->hasMany('App\Models\producto');
    }
    public function users()
    {
        return $this->hasOne('App\Models\user');
    }
}
