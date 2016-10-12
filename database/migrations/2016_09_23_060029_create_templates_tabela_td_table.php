<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTabelaTdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates_tabela_td', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor');
            $table->integer('template_tabela_th_id')->unsigned();
            $table->foreign('template_tabela_th_id')->references('id')->on('templates_tabela_th')->onDelete('cascade');    
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
        Schema::drop('templates_tabela_td');
    }
}
