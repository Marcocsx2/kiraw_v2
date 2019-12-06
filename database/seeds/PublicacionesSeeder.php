<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publicaciones')->insert([
            'publi_imagen'=>'assets/Imagenes/Productos/limacafe.png',
            'publi_titulo'=>'Cafe Lima',
            'publi_descripcion'=>'Origen en la cidad de lima, para compartir en familia, puedes tomarlo en verano y invierno',
            'proveedores_id'=> '1',
        ]);
    }
}
