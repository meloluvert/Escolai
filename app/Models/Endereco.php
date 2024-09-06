<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $fillable = ['cep', 'rua','estado','cidade','bairro'];
    public function escola() {
     return $this->hasOne('App\Models\Escola', 'escola_id');
     }
}
