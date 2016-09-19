<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PropostaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

       	DB::table('proposta')->insert([
            'status' => 1,
            'nome' => 'Proposta de Serviço',
            'user_id' => 1,
        ]);

        DB::table('proposta')->insert([
            'status' => 1,
            'nome' => 'Proposta de Venda',
            'user_id' => 1,
        ]);

         Model::reguard();
    }
}