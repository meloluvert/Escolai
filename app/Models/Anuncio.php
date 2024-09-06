<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'descricao', 'alcance', 'data_fim', 'data_inicio', 'visualizacoes', 'foto'];
}
