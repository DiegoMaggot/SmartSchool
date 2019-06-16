<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = ['curso', 'campus'];
    public $timestamps = false;

    public function alunos()
    {
        return $this->hasMany('App\Aluno');
    }
}
