<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;


    protected $fillable = ['users_id', 'total'];

    public function users()
    {
        return $this->hasMany('App\Models\user');
    }
    
}
