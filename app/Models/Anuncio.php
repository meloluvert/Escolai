<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    use HasFactory;
    protected $fillable = ['motorista_id','escola_id','titulo', 'descricao', 'alcance', 'data_fim', 'data_inicio', 'visualizacoes', 'foto'];
    
    public function motorista() {
        return $this->belongsTo('App\Models\Motorista') ;
    }
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
}
