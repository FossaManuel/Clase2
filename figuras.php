<?php
		
	abstract class FiguraGeometrica
	{
		abstract public function Saludar();
		
		protected $color;
		protected $perimetro;
		protected $superficie;

		public function __construct()
		{}

		abstract protected function CalcularDatos();

		abstract public function Dibujar();

		public function GetColor()
		{
			return $this->color;
		}

		public function SetColor($valor)
		{
			$this->color = $valor;
		}

		public function ToString()
		{
			
		}
	}

?>