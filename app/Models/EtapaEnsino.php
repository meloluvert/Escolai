<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtapaEnsino extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome'
    ];
}
