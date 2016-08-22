<?php
	namespace App\Classes\Figuras {
		class Circulo implements InterfaceFigura {
			private $p_tipo;
			private $p_diametro;
			
			public function __construct($datos) {
				/*
					- $datos: es un Array que contiene los datos descriptivos de la figura, a saber:
						- "base": medida de la base de un cuadrado o triángulo.
						- "altura": medida de la altura de un cuadrado o triángulo.
						- "diametro": medida del diámetro de un círculo.
				*/
				$this->p_diametro = (isset($datos["diametro"]) ? (double)$datos["diametro"] : 0);
				$this->p_tipo = self::FIGURA_CIRCULO;
			}
			
			public function superficie() {
				return M_PI * pow($this->p_diametro / 2, 2);
			}
			
			public function base() {
				return null;
			}
			
			public function altura() {
				return null;
			}
			
			public function diametro() {
				return $this->p_diametro;
			}
			
			public function tipo() {
				return $this->p_tipo;
			}
		}
	}
?>