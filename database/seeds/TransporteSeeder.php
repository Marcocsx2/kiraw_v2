<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transporte')->insert([
            'tra_imagen'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.brandsoftheworld.com%2Flogo%2Frappi&psig=AOvVaw2sUeMAoXgb9Tm1NemByEud&ust=1574528511337000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPD5kJCm_uUCFQAAAAAdAAAAABAD',
            'tra_nombre'=>'Rappi'
        ]);
    }
}
