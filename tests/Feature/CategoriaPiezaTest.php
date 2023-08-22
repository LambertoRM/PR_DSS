<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Categoria;
use App\Pieza;

class CategoriaPiezaTest extends TestCase
{
    public function testRelacion()
    {
        //Comprobamos que cada categoria tiene sus piezas asociadas y que el nombre de las piezas coincide
        //---------------------------------------------------------

        //Categoria 1 - 1 pieza
        $categoria = Categoria::find(1);
        $piezas = $categoria->piezas;
        $this->assertCount(1, $piezas);
        foreach ($piezas as $pieza)
        {
            if ($pieza->nombre == 'Pieza6')
            {
                $this->assertEquals('Pieza6', $pieza->nombre);
            }
        }
        

        //Categoria 2 - 3 piezas
        $categoria = Categoria::find(2);
        $piezas = $categoria->piezas;
        $this->assertCount(3, $piezas);
        foreach ($piezas as $pieza)
        {
            if ($pieza->nombre == 'Pieza5')
            {
                $this->assertEquals('Pieza5', $pieza->nombre);
            }
            if ($pieza->nombre == 'Pieza1')
            {
                $this->assertEquals('Pieza1', $pieza->nombre);
            }
            if ($pieza->nombre == 'Pieza2')
            {
                $this->assertEquals('Pieza2', $pieza->nombre);
            }
        }

        //Categoria 3 - 2 piezas
        $categoria = Categoria::find(3);
        $piezas = $categoria->piezas;
        $this->assertCount(2, $piezas);
        foreach ($piezas as $pieza)
        {
            if ($pieza->nombre == 'Pieza3')
            {
                $this->assertEquals('Pieza3', $pieza->nombre);
            }
            if ($pieza->nombre == 'Pieza4')
            {
                $this->assertEquals('Pieza4', $pieza->nombre);
            }
        }
    }
}
