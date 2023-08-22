<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categoria;

class CategoriaTest extends TestCase
{
    public function testDatos()
    {
        $categoria = Categoria::find(1);
        $this->assertEquals($categoria->id, '1');
        $this->assertEquals($categoria->nombre, 'Categoria1');
        $this->assertEquals($categoria->descripcion, 'Categoría Base');
    }
}
