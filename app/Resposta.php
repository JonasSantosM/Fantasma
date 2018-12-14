<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    //
    protected $fillable = ['resposta','data','pergunta_id'];

    public function pergunta(){
        return $this->belongsTo('App\Pergunta');
    }
}
