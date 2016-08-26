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
            $table->boolean('status');
            $table->string('nome');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });

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
            $table->foreign('proposta_id')->references('id')->on('proposta')->onDelete('cascade');  
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('proposta_texto', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->string('titulo');
            $table->string('descricao');
            $table->text('texto'); 
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mid_texto_proposta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('proposta')->onDelete('cascade');
            $table->integer('proposta_texto_id')->unsigned();
            $table->foreign('proposta_texto_id')->references('id')->on('proposta_texto')->onDelete('cascade');    
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('proposta_tabela', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->string('titulo');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('mid_tabela_proposta', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('proposta_id')->unsigned();
            $table->foreign('proposta_id')->references('id')->on('proposta')->onDelete('cascade');
            $table->integer('proposta_tabela_id')->unsigned();
            $table->foreign('proposta_tabela_id')->references('id')->on('proposta_tabela')->onDelete('cascade');    
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('proposta_tabela_th', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('tipo');
            $table->integer('proposta_tabela_id')->unsigned();
            $table->foreign('proposta_tabela_id')->references('id')->on('proposta_tabela')->onDelete('cascade');    
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('proposta_tabela_td', function (Blueprint $table) {
            $table->increments('id');
            $table->string('valor');
            $table->integer('proposta_tabela_th_id')->unsigned();
            $table->foreign('proposta_tabela_th_id')->references('id')->on('proposta_tabela_th')->onDelete('cascade');    
            $table->timestamps();
            $table->softDeletes();
        });

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
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');onDelete('cascade');    
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status');
            $table->string('nome');
            $table->date('data_inicio');
            $table->date('data_termino');
            $table->string('endereco');
            $table->text('descricao');
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
        //
    }
}
