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

    public function escolaridade() {
        return $this->belongsTo('App\Models\Escolaridade') ;
    }
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
}
