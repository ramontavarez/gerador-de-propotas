<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();
        
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'gdepropostas@gmail.com',
            'password' => bcrypt('q1w2e3r4'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ramon',
            'email' => 'ramonbardic@gmail.com.br',
            'password' => bcrypt('q1w2e3r4'),
        ]);

         Model::reguard();
        
    }
}

