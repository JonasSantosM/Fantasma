<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aulas extends Model
{
    //
    protected $protected = ['titulo','extensao','video','descricao'];

    public function cursos(){
        return $this->belongsTo('App\Curso');
    }

}
