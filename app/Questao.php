<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';
    protected $fillable = ['tipo', 'pergunta'];
    public $timestamps = false;

    public function alternativas()
    {
        return $this->hasMany('App\Alternativa');
    }
}
