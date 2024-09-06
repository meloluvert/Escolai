<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome'];
        public function turno_escola() {
            return $this->hasMany('App\Models\TurnoEscola', 'turno_id');
            }
}
