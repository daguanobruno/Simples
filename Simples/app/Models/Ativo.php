<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Ativo extends Model
{
    use HasFactory;

    protected $table = 'ativo';
    public $timestamps = false;
    
    protected $casts = [
        'preco' => 'float'
    ];

    protected $fillable = [
        'codigo'
    ];
}

