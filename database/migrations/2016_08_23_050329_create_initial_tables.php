<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('proposta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('contratante_nome');
            $table->string('contratante_endereco');
            $table->string('contratante_telefone');
            $table->string('contratante_email');
            $table->date('data');
            $table->date('validade');
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
    }
}
