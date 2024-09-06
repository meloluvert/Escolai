<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'cpf_coordenador',
        'endereco',
        'telefone',
        'media_mensalidade',
        'num_alunos',
        'whatsapp',
        'instagram',
        'descricao1',
        'descricao2',
    ];
    public function endereco() {
        return $this->belongsTo('App\Models\Endereco') ;
    }
}
