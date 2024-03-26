<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = ['title', 'author_id', 'category_id'];

    public function reseñas()
    {
        return $this->hasMany(Reseña::class);
    }

    public function autor()
    {
        return $this->belongsTo(Autor::class, 'author_id');
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class, 'category_id');
    }
}