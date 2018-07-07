<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = "aluno";
    protected $primaryKey = "id";
    
    protected $fillable = array('n_aluno', 'nome', 'curso', 'ano_aluno', 'data_nasc', 'email', 'sexo', 'bi_cc', 'morada', 'localidade', 'codigo_postal', 'contato', 'created_at', 'updated_at');

    public $timestamps = true;

    public function alunos()
    {
        return $this->hasMany('App\Aluno');
    }
}
