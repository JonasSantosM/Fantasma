<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Logincurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cursologin', function (Blueprint $table) {

            $table->integer('curso_id')->unsigned();;
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');

            $table->integer('login_id')->unsigned();;
            $table->foreign('login_id')->references('id')->on('logins')->onDelete('cascade');

            $table->integer('progresso');
            $table->integer('ultimoVideo');

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
        //
        Schema::dropIfExists('cursologin');
    }
}
