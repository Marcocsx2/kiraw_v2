<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VentasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ventas')->insert([
            'ven_fecha'=>'2019-11-20',
            'ven_destino'=>'Santa Anita',
            'ven_estado'=>'En proceso',
            'ven_fecha_entrega'=>'2019-11-22',
            'ven_total'=>'24',
            'clientes_id'=>'1',
            'transporte_id'=>'1',
        ]);
    }
}
