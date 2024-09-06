<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscolaridadeProfessor extends Model
{
    use HasFactory;
    protected $fillable = [
        'escola_id',
        'escolaridade_id',
        'porcentagem'
    ];
}