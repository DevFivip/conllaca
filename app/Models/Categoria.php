<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    public $fillable = [
        'nombre',
    ];

    public function categorias()
    {
        return $this->hasMany(Subcategoria::class);
    }
}
