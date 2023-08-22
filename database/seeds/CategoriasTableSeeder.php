<?php

use Illuminate\Database\Seeder;
use App\Categoria;
use App\Pieza;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed 0, categoria base, la usaremos para introduciar piezas que aún no tienen categoría o cuya categoría ha sido borrada
        $categoria = new Categoria([
            'nombre'=>'Categoría Base',
            'descripcion'=>'Categoría por defecto']);
        
        $categoria->save();

        //Seed 1
        $categoria = new Categoria([
            'nombre'=>'Coches',
            'descripcion'=>'Categoría de las piezas de coches.']);
        
        $categoria->save();
        
        $categoria->piezas()->saveMany([
            new Pieza([
                'nombre'=>'Motor',
                'num_serie'=> '11',
                'precio'=>'240.4' ,
                'descripcion'=>'Motor 1.9 Gasolina 100CV.',
                'imagen' => 'motor.jpg'
                ]),
            new Pieza([
                'nombre'=>'Caja de cambios',
                'num_serie'=> '12',
                'precio'=>'148.4' ,
                'descripcion'=>'Caja de cambios para Volkswagen.',
                'imagen' => 'caja_cambios.jpg'
                ])
        ]);

        //Seed 2
        $categoria = new Categoria([
            'nombre'=>'Motos',
            'descripcion'=>'Categoría de las piezas de motos.']);
        
        $categoria->save();

        $categoria->piezas()->saveMany([
            new Pieza([
                'nombre'=>'Palanca de freno',
                'num_serie'=> '21',
                'precio'=>'41.2' ,
                'descripcion'=>'Freno de mano universal cualquier coche.',
                'imagen' => 'palanca_freno.jpg'
                ]),
            new Pieza([
                'nombre'=>'Casco',
                'num_serie'=> '22',
                'precio'=>'19.7' ,
                'descripcion'=>'Casco de moto Enduro Ufo Plast Akan color negro.',
                'imagen' => 'casco.png'
                ])
        ]);

        
        
        

    }
}
