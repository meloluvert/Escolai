<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;
    protected $fillable = ['nota', 'descricao', 'data', 'escola_id', 'responsavel_id'];
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
    public function responsavel() {
        return $this->belongsTo('App\Models\Responsavel') ;
    }
}
