<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcervosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acervos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->default('');
            $table->string('comentario')->default('');
            $table->string('extensao')->default('');

            $table->integer('login_id')->unsigned();
            $table->foreign('login_id')->references('id')->on('logins')->onDelete('cascade');
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
        Schema::dropIfExists('acervos');
    }
}
