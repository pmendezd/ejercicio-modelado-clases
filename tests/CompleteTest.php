<?php

class CompleteTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample() {
		//Test 1: círculo:
		$factory = new \App\Classes\Figuras\CirculoFactory();
		$figura = $factory->crearFigura(
			[
				"diametro" => 15
			]
		);
		$this->assertTrue(
			round($figura->superficie(), 2) == 176.71
			&& $figura->base() === null
			&& $figura->altura() === null
			&& $figura->diametro() == 15
			&& $figura->tipo() == 3
		);
		
		//Test 2: cuadrado:
		$factory = new \App\Classes\Figuras\CuadradoFactory();
		$figura = $factory->crearFigura(
			[
				"base" => 15,
				"altura" => 2,
			]
		);
		$this->assertTrue(
			$figura->superficie() == 30
			&& $figura->base() == 15
			&& $figura->altura() == 2
			&& $figura->diametro() === null
			&& $figura->tipo() == 1
		);
		
		//Test 3: triángulo:
		$factory = new \App\Classes\Figuras\TrianguloFactory();
		$figura = $factory->crearFigura(
			[
				"base" => 20,
				"altura" => 3,
			]
		);
		$this->assertTrue(
			$figura->superficie() == 30
			&& $figura->base() == 20
			&& $figura->altura() == 3
			&& $figura->diametro() === null
			&& $figura->tipo() == 2
		);
	}
}
