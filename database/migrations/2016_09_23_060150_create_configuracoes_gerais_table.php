<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfiguracoesGeraisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracoes_gerais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_empresa');
            $table->string('logo_empresa');
            $table->string('razao_social');
            $table->string('assinatura_carimbo');
            $table->string('endereco_completo');
            $table->string('telefone');
            $table->string('celular');
            $table->string('email');
            $table->string('cnpj');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
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
        Schema::drop('configuracoes_gerais');
    }
}
