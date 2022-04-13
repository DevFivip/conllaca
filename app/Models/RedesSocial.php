<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RedesSocial extends Model
{
    use HasFactory;

    public $fillable = [
        'imagen',
        'nombre',
        'url',
    ];
}
