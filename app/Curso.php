<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Login;

class Curso extends Model
{
    //
    protected $fillable = ['nome','numeroAulas','categoria','descricao'];

    public function aulas(){
        return $this->hasMany('App\Aulas');
    }

    public function login(){
        return $this->belongsToMany(Login::class);
    }
}
