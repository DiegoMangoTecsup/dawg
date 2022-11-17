<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public function Cliente()
    {
        return $this->hasMany(Venta::class);
        return $this->hasMany(Intrumento::class);
    }

}
