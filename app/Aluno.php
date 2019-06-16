<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'matricula','email'];
    public $timestamps = false;

    public function turma()
    {
        return $this->belongsTo('App\Turma');
    }
}
