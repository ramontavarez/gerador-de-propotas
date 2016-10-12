<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTabelaThTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates_tabela_th', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('tipo');
            $table->integer('template_tabela_id')->unsigned();
            $table->foreign('template_tabela_id')->references('id')->on('templates_tabela')->onDelete('cascade');    
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
        Schema::drop('templates_tabela_th');
    }
}
