<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password'];
        public function anuncio() {
            return $this->hasMany('App\Models\Anuncios', 'motorista_id');
        }   
}
