<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prematricula extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'telefone',
        'email',
        'categoria',
        'anexos',
    ];

    protected $casts = [
        'anexos' => 'array', // Para armazenar os arquivos como um array no banco de dados
    ];
}
