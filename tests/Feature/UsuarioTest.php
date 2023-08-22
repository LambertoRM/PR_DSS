<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Usuario;

class UsuarioTest extends TestCase
{
    public function testDatos()
    {
        $usuario = Usuario::find(1);
        $this->assertEquals($usuario->id, '1');
        $this->assertEquals($usuario->nombre, 'Usuario1');
        $this->assertEquals($usuario->DNI, '58462987K');
        $this->assertEquals($usuario->direccion, 'Calle Pepito Nº5, San Vicente del Raspeig, Alicante, 03690');
        $this->assertEquals($usuario->telefono, '695834915');
        $this->assertEquals($usuario->email, 'usuario1@gmail.com');

        $usuario = Usuario::find(2);
        $this->assertEquals($usuario->id, '2');
        $this->assertEquals($usuario->nombre, 'Usuario2');
        $this->assertEquals($usuario->DNI, '84629385L');
        $this->assertEquals($usuario->direccion, 'Calle Pepito Nº3, San Vicente del Raspeig, Alicante, 03690');
        $this->assertEquals($usuario->telefono, '668493581');
        $this->assertEquals($usuario->email, 'usuario2@gmail.com');
    }
}