<?php declare(strict_types=1);

class ConstructoresEnPhp
{
	public $nombreDelProducto;

	public $nombreDelFabricante;

	public $apellidoDelFabricante;

	public $precio;



	public function __construct($nombreDelProducto, $nombreDelFabricante, $apellidoDelFabricante, $precio)
	{
		$this->nombreDelProducto = $nombreDelProducto;
		$this->nombreDelFabricante = $nombreDelFabricante;
		$this->apellidoDelFabricante = $apellidoDelFabricante;
		$this->precio = $precio;
	}

}


$producto_A = new ConstructoresEnPhp("Atrapa Spedi Gonález", "Industrias", "ACME", 500);

$producto_B = new ConstructoresEnPhp("Caza corre caminos;", "ACME;", "Coyote;", 1000);

echo $producto_A->nombreDelProducto . "<br>";
echo $producto_A->nombreDelFabricante . "<br>";
echo $producto_A->apellidoDelFabricante . "<br>";
echo $producto_A->precio . "<br>";

echo "<br>";

echo $producto_B->nombreDelProducto . "<br>";
echo $producto_B->nombreDelFabricante . "<br>";
echo $producto_B->apellidoDelFabricante . "<br>";
echo $producto_B->precio . "<br>";
