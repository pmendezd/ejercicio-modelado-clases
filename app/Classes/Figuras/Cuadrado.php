<?php
	namespace App\Classes\Figuras {
		class Cuadrado implements InterfaceFigura {
			private $p_tipo;
			private $p_base;
			private $p_altura;
			
			public function __construct($datos) {
				/*
					- $datos: es un Array que contiene los datos descriptivos de la figura, a saber:
						- "base": medida de la base de un cuadrado o triángulo.
						- "altura": medida de la altura de un cuadrado o triángulo.
						- "diametro": medida del diámetro de un círculo.
				*/
				$this->p_base = (isset($datos["base"]) ? (double)$datos["base"] : 0);
				$this->p_altura = (isset($datos["altura"]) ? (double)$datos["altura"] : 0);
				$this->p_tipo = self::FIGURA_CUADRADO;
			}
			
			public function superficie() {
				return $this->p_base * $this->p_altura;
			}
			
			public function base() {
				return $this->p_base;
			}
			
			public function altura() {
				return $this->p_altura;
			}
			
			public function diametro() {
				return null;
			}
			
			public function tipo() {
				return $this->p_tipo;
			}
		}
	}
?>