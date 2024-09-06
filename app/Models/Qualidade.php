<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome'
    ];
    public function escola_qualidade() {
        return $this->hasMany('App\Models\EscolaQualidade', 'qualidade_id');
        }
}
