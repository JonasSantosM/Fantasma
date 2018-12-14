<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postagem extends Model
{
    //
    protected $fillable = ['post', 'login_id'];

    public function login(){
        return $this->belongsTo('App\Login');
    }

}
