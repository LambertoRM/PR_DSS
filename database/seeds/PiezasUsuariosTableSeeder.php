<?php

use Illuminate\Database\Seeder;
use App\Usuario;
use App\Pieza;

class PiezasUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* //Relación Usuario1-Pieza1
        $usuario=Usuario::find(1);
        $pieza=Pieza::find(1);
        $pieza->usuarios()->attach($usuario->id);

        //Relación Usuario1-Pieza2
        $usuario=Usuario::find(1);
        $pieza=Pieza::find(2);
        $pieza->usuarios()->attach($usuario->id);

        //Relación Usuario2-Pieza1
        $usuario=Usuario::find(2);
        $pieza=Pieza::find(2);
        $pieza->usuarios()->attach($usuario->id);*/
    }
}
