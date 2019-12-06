<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProveedoresSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ClientesSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(PublicacionesSeeder::class);
        $this->call(TransporteSeeder::class);
        $this->call(VentasSeeder::class);

    }
}
