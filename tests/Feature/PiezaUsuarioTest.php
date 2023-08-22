<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Usuario;
use App\Pieza;

class PiezaUsuarioTest extends TestCase
{
    public function testRelacion()
    {
        //Relación Usuario1-Pieza1
        $usuario = Usuario::find(1);
        $pieza = Pieza::find(1);
        
        $this->assertEquals($usuario->id, '1');
        $this->assertEquals($pieza->id , '1');

        //Relación Usuario1-Pieza2
        $usuario = Usuario::find(1);
        $pieza = Pieza::find(2);
        
        $this->assertEquals($usuario->id, '1');
        $this->assertEquals($pieza->id , '2');

        //Relación Usuario2-Pieza2
        $usuario = Usuario::find(2);
        $pieza = Pieza::find(2);
        
        $this->assertEquals($usuario->id, '2');
        $this->assertEquals($pieza->id , '2');
    }
}
