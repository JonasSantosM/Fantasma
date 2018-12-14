<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_login', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('login_id')->unsigned();
            $table->integer('curso_id')->unsigned();
            //$table->integer('progresso');
            //$table->integer('ultimoVideo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso_login');
    }
}
