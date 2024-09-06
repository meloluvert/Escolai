<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscolaEtapaEnsino extends Model
{
    use HasFactory;
    protected $fillable = [
        'escola_id',
        'etapa_ensino_id',
    ];
    public function etapa_ensino() {
        return $this->belongsTo('App\Models\EtapaEnsino') ;
    }
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
}
