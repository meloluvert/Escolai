<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscolaQualidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'escola_id',
        'qualidade_id',
    ];
    
    public function qualidade() {
        return $this->belongsTo('App\Models\Qualidade') ;
    }
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
}
