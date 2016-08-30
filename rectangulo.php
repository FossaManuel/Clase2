<?php
	
	include_once "figuras.php";

	class Rectangulo extends FiguraGeometrica
	{
		
		private $ladoUno;
		private $ladoDos;

		public function __contruct($l1,$l2)
		{
			$this->ladoUno = $l1;
			$this->ladoDos = $l2;
			$this->CalcularDatos();
		}

		protected function CalcularDatos()
		{
			$this->perimetro = ($ladoUno*2)+($ladoDos*2);
			$this->superficie = ($ladoUno*$ladoDos);
		} 

		public function Dibujar()
		{

		}

		public function ToString()
		{

		}


		/*public function __contruct()
		{}

		public function Saludar()
		{
			echo "Hola Mundos2";
		}*/
	}
?>