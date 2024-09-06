<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome'
    ];
    public function escola_escolaridade() {
        return $this->hasMany('App\Models\EscolaridadeProfessor', 'escolaridade_id');
    }   
}
