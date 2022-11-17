<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function Venta()
    {
        return $this->belongsTo(Intrumento::class);
        return $this->belongsTo(Cliente::class);
    }
}
