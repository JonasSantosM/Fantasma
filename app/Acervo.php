<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acervo extends Model
{
    //
    protected $fillable = ['nome','comentario', 'login_id','extensao'];
    
    public function login(){
        return $this->belongsToMany(Login::class);
    }
}
