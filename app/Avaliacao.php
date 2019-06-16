<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';
    protected $fillable = ['titulo', 'assunto'];
    public $timestamps = false;

    public function questoes()
    {
        return $this->belongsToMany('App\Questao');
    }
    public function turmas()
    {
        return $this->belongsToMany('App\Turma');
    }
}
