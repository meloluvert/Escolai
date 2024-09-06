<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnoEscola extends Model
{
    use HasFactory;
    protected $fillable = [
        'turno_id',
        'escola_id'];

        public function turno() {
            return $this->belongsTo('App\Models\Turno') ;
        }
        public function escola() {
            return $this->belongsTo('App\Models\Escola') ;
        }
}
