<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefone',
        'foto_de_perfil'
    ];
}
