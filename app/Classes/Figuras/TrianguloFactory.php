<?php
	namespace App\Classes\Figuras {
		class TrianguloFactory implements InterfaceFiguraFactory {
			public function crearFigura($datos) {
				/*
					- $datos: es un Array que contiene los datos descriptivos de la figura, a saber:
						- "base": medida de la base de un cuadrado o triángulo.
						- "altura": medida de la altura de un cuadrado o triángulo.
						- "diametro": medida del diámetro de un círculo.
				*/
				return new Triangulo($datos);
			}
		}
	}
?>