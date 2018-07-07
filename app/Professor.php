<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = "professor";
    protected $primaryKey = "id";

    protected $fillable = array('n_professor', 'nome', 'tipo_professor', 'tempo_integral_parcial', 'data_nasc', 'email', 'sexo', 'bi_cc', 'morada', 'localidade', 'codigo_postal', 'contato', 'created_at', 'updated_at');

    public $timestamps = true;

    public function professores()
    {
        return $this->hasMany('App\Professor');
    }
}
