<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed 1
        $usuario= new Usuario([
            'nombre'=>'Pepe',
            'password'=> '12345678',
            'DNI'=> '58462987K',
            'direccion'=>'Calle Pepito Nº5, San Vicente del Raspeig, Alicante, 03690' ,
            'telefono'=>'695834915',
            'email'=>'pepe1414@gmail.com']);

        $usuario->save();
        
        //Seed 2
        $usuario= new Usuario([
            'nombre'=>'Rosa',
            'password'=> '00000000',
            'DNI'=> '84629385L',
            'direccion'=>'Calle Pepito Nº16, San Vicente del Raspeig, Alicante, 03690' ,
            'telefono'=>'668493581',
            'email'=>'Rousets_12@gmail.com']);

        $usuario->save();
    }
}
