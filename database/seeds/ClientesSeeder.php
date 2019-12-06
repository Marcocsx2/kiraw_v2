<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'cli_imagen'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg',
            'cli_nombres'=>'Cristhian Estiff',
            'cli_apellidos'=>'Lopez Cotera',
            'cli_correo'=>'cristian_lopez@gmail.com',
            'cli_contraseña'=>bcrypt('cristian123'),
        ]);
    }
}
