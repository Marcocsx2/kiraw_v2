<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proveedores')->insert([
            'pro_imagen'=>'https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg',
            'pro_nombre'=> 'Coffe lima SAC',
            'pro_descripcion'=>'El sabor del cafe en tu boca',
            'pro_fundacion' => '2010-12-11',
            'pro_telefono'=>'965547852',
            'pro_trabajadores'=>'1245',
            'pro_correo'=>'coffe_lima_sac@gmail.com',
            'pro_contraseña' => bcrypt('coffe123'), 
        ]);
    }
}