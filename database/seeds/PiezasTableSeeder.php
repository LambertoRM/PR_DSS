<?php

use Illuminate\Database\Seeder;
use App\Pieza;
use App\Categoria;

class PiezasTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed 1
        $pieza = new Pieza([
            'nombre'=>'Volante',
            'num_serie'=> '01',
            'precio'=>'7.54' ,
            'descripcion'=>'Volante de competición customizable.',
            'imagen' => 'volante.jpg'
            ]);
        $categoria = Categoria::find(2);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 2
        $pieza = new Pieza([
            'nombre'=>'Sillín',
            'num_serie'=> '02',
            'precio'=>'13.00' ,
            'descripcion'=>'Sillín de seguridad infantil para asiento trasero de coche.',
            'imagen'=>'sillin.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        $categoria = Categoria::find(2);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 3
        $pieza = new Pieza([
            'nombre'=>'Pack de bujías',
            'num_serie'=> '032',
            'precio'=>'25.00' ,
            'descripcion'=>'Pack de bujías BOSCH de encendido.',
            'imagen'=>'bujias.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 4
        $pieza = new Pieza([
            'nombre'=>'Radiador moto',
            'num_serie'=> '012',
            'precio'=>'87.12' ,
            'descripcion'=>'Radiador refigeración para moto 125.',
            'imagen'=>'radiador_moto.jpg'
            ]);
        $categoria = Categoria::find(3);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 5
        $pieza = new Pieza([
            'nombre'=>'Manillar',
            'num_serie'=> '41296',
            'precio'=>'299.99' ,
            'descripcion'=>'Manillar completo Crossbar de 1"-Roland Sands Design.',
            'imagen'=>'manillar_moto.jpg'
            ]);
        $categoria = Categoria::find(3);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 6
        $pieza = new Pieza([
            'nombre'=>'Llanta',
            'num_serie'=> '0125123',
            'precio'=>'149.99' ,
            'descripcion'=>'Llanta universal (una unidad) de 17 pulgadas.',
            'imagen'=>'llanta.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 7
        $pieza = new Pieza([
            'nombre'=>'Electrónica',
            'num_serie'=> '92513',
            'precio'=>'9.92' ,
            'descripcion'=>'Maletín con recambios de bombillas y fusibles.',
            'imagen'=>'maletin_recambios.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 8
        $pieza = new Pieza([
            'nombre'=>'Motor lavaparabrisas',
            'num_serie'=> '41296',
            'precio'=>'48.23' ,
            'descripcion'=>'Motor lavaparabrisas universal 12V.',
            'imagen'=>'motor_lavaparabrisas.jpg'
            ]);
        $categoria = Categoria::find(2);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 9
        $pieza = new Pieza([
            'nombre'=>'Escobillas',
            'num_serie'=> '56721',
            'precio'=>'14.95' ,
            'descripcion'=>'Escobillas limpiaparabrisas de 23cm.',
            'imagen'=>'escobillas.jpg'
            ]);
        $categoria = Categoria::find(2);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 10
        $pieza = new Pieza([
            'nombre'=>'Corona de acero',
            'num_serie'=> '525047',
            'precio'=>'37.16' ,
            'descripcion'=>'Corona de acero de 10 cm de radio.',
            'imagen'=>'corona.jpg'
            ]);
        $categoria = Categoria::find(3);
        $pieza->categoria()->associate($categoria);
        $pieza->save();
        
        //Seed 11
        $pieza = new Pieza([
            'nombre'=>'Cadena',
            'num_serie'=> '4150126',
            'precio'=>'12.75' ,
            'descripcion'=>'Cadena universal moto paso 415X126 negra.',
            'imagen'=>'cadena.jpg'
            ]);
        $categoria = Categoria::find(3);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 12
        $pieza = new Pieza([
            'nombre'=>'Cúpula',
            'num_serie'=> '7508123',
            'precio'=>'96.20' ,
            'descripcion'=>'Cúpula universal moto ahumada.',
            'imagen'=>'cupula.jpg'
            ]);
        $categoria = Categoria::find(3);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 13
        $pieza = new Pieza([
            'nombre'=>'Catalizador',
            'num_serie'=> '825089',
            'precio'=>'121.76' ,
            'descripcion'=>'Catalizador universal gasolina 51mm.',
            'imagen'=>'catalizador.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 14
        $pieza = new Pieza([
            'nombre'=>'Filtro de aceite',
            'num_serie'=> '0451103079',
            'precio'=>'7.99' ,
            'descripcion'=>'Filtro de aceite para motor gasolina.',
            'imagen'=>'filtro_aceite.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();
        
        //Seed 15
        $pieza = new Pieza([
            'nombre'=>'Suspensión',
            'num_serie'=> '1710934',
            'precio'=>'669.00' ,
            'descripcion'=>'Kit de suspensión roscada.',
            'imagen'=>'kit_suspension.jpg'
            ]);
        $categoria = Categoria::find(2);
        $pieza->categoria()->associate($categoria);
        $pieza->save();

        //Seed 16
        $pieza = new Pieza([
            'nombre'=>'Frenos',
            'num_serie'=> '3462353',
            'precio'=>'45.90' ,
            'descripcion'=>'Disco de freno BOSCH ventilado.',
            'imagen'=>'disco_frenos.jpg'
            ]);
        //Comprueba si la categoría existe y si no asigna la pieza a la categoría base
        if (Categoria::find(4) != NULL) $categoria = Categoria::find(4);
        else $categoria = Categoria::find(1);
        $pieza->categoria()->associate($categoria);
        $pieza->save();
    }
}
