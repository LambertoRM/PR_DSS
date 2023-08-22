<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Pieza;

class PiezaTest extends TestCase
{
    public function testDatos()
    {
        $pieza = Pieza::find(1);
        $this->assertEquals($pieza->id, '1');
        $this->assertEquals($pieza->nombre, 'Pieza1');
        $this->assertEquals($pieza->num_serie, '11');
        $this->assertEquals($pieza->precio, '240.40');
        $this->assertEquals($pieza->descripcion, 'Motor');
        $this->assertEquals($pieza->categoria_id, '2');
    }
}
