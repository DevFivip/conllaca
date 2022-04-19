<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Producto extends Model
{
    use HasFactory;

    public $fillable = [
        'producto_nombre',
        'categoria_id',
        'subcategoria_id',
        'descripcion',
        'precio',
        'imagen',
        'slug',
    ];


    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }


    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::class);
    }
}
