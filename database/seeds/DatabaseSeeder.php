<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriasTableSeeder::class);
        $this->call(PiezasTableSeeder::class);
        $this->call(UsuariosTableSeeder::class);
        $this->call(PiezasUsuariosTableSeeder::class);
        $this->call(PedidosTableSeeder::class);
        $this->call(CarritosTableSeeder::class);
        
    }
}
