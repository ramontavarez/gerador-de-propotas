<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateTextoPropostaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_texto_proposta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('propostas')->onDelete('cascade');
            $table->integer('template_texto_id')->unsigned();
            $table->foreign('template_texto_id')->references('id')->on('templates_texto')->onDelete('cascade');    
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
        Schema::drop('template_textos_proposta');
    }
}
