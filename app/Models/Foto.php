<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'endereco','escola_id'
    ];
    public function escola() {
        return $this->belongsTo('App\Models\Escola') ;
    }
}
