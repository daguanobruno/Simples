<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    use HasFactory;

    protected $table = 'ordem';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    protected $casts = [
        'id' => 'int',
        'tipo' => 'int',
        'quantidade' => 'int',
        'valor' => 'float'

    ];

    protected $fillable = [
        'data',
        'codigo_ativo'
    ];
}
