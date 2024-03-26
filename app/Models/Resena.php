<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = ['user_id', 'book_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id');
    }

    public function libro()
    {
        return $this->belongsTo(Libro::class, 'book_id');
    }
}