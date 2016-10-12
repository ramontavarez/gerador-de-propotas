<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropostaInfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposta_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('contratante_nome');
            $table->string('contratante_endereco');
            $table->string('contratante_telefone');
            $table->string('contratante_email');
            $table->date('data');
            $table->date('validade'); 
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');  
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proposta_infos');
    }
}
