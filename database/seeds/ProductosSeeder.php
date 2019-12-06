<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
           'prod_imagen'=>'assets/Imagenes/Productos/limacafe.png', 
           'prod_nombre'=>'Cafe', 
           'prod_precio'=>'12.0', 
           'prod_stock'=>'124', 
           'prod_descripcion'=>'Cafe hecho en Lima',
           'categorias_id'=>'1',
           'proveedores_id'=>'1'    
        ]);
    }
}
