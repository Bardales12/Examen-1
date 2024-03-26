<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['name', 'email', 'password'];

    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }

    public function reseñas()
    {
        return $this->hasMany(Reseña::class);
    }
}