<?php
	namespace App\Classes\Figuras {
		interface InterfaceFigura {
			const FIGURA_CUADRADO = 1;
			const FIGURA_TRIANGULO = 2;
			const FIGURA_CIRCULO = 3;
			
			public function __construct($datos);
			
			public function superficie();
			
			public function base();
			
			public function altura();
			
			public function diametro();
			
			public function tipo();
		}
	}
?>