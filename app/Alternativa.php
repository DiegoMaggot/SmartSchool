<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $fillable = ['texto'];
    public $timestamps = false;

    public function questao()
    {
        return $this->belongsTo('App\Questao');
    }
}
