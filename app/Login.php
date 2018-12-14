<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Curso;

class Login extends Model
{
    //
    protected $fillable = ['email','apelido','senha','dataNascimento'];

    public function curso(){
        return $this->belongsToMany(Curso::class);
    }

    public function perguntas(){
        return $this->hasMany('App\Pergunta');
    }

    public function postagem(){
        return $this->hasMany('App\Postagem');
    }

    public function acervo(){
        return $this->hasMany('App\Acervo');
    }

    public function respostas(){
        return $this->hasMany('App\Respostas');
    }

}
