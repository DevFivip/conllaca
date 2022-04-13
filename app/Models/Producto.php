<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
