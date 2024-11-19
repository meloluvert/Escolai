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
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function endereco()
    {
        return $this->belongsTo('App\Models\Endereco');
    }
    public function escola_etapa_ensino()
    {
        return $this->hasMany('App\Models\EscolaEtapaEnsino', 'escola_id');
    }
    public function escolaridade_professor()
    {
        return $this->hasMany('App\Models\EscolaridadeProfessor', 'escola_id');
    }
    public function escola_qualidade()
    {
        return $this->hasMany('App\Models\EscolaQualidade', 'escola_id');
    }
    public function escola_avaliacao()
    {
        return $this->hasMany('App\Models\EscolaAvaliacao', 'escola_id');
    }
    public function turno_escola() {
        return $this->hasMany('App\Models\TurnoEscola', 'escola-id');
        }
}
