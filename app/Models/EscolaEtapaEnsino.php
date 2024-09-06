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
    
}
