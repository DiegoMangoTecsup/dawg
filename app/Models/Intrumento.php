<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intrumento extends Model
{
    use HasFactory;
    public function Intrumento()
    {
        return $this->belongsTo(Cliente::class);
        return $this->hasMany(Venta::class);
    }
}
