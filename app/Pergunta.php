<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{
    //
    protected $fillable = ['titulo','descricao','likes','respondida','login_id'];

    public function login(){
        return $this->belonsTo('App\Login');
    }

    public function resposta(){
        return $this->hasMany('App\Resposta');
    }

    
}
