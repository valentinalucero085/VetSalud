<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{

    public function turnos()
    {
        return $this->hasMany(Turno::class);
    }
}
