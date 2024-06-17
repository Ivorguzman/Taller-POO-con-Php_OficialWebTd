<?php declare(strict_types=1); 

class MetodosEnPhp
{
	// Estado Inicial de la  instancia  por defecto  indicando el tipo de la propíedad (Altamente recomendado su uso) no acepta valores null
	public ?string $producto = "Caza corre caminos;";

	public ?string $nombreDelFabricante = "ACME;";

	public ?string $apellidoDelFabricante = "Coyote;";

	public ?int $precio = 500;





	public function getInformacionProducto(): void
	{
		echo "<br>";
		echo "<br>";
		echo "<br>";
		// Cambiando el estado inicial(DEFECTO) del objeto  por medio de instancia $producto1
		echo '***** inicio Cambiando el estado inicial(DEFECTO) del objeto  por medio de instancia $producto1 *****';
		echo "<br>";
		echo $this->producto = "Caza corre caminos , ! mejor llamarlo revienta coyote ¡;";
		echo "<br>";
		echo $this->nombreDelFabricante = "Correcaminos ACME;";
		echo "<br>";
		echo $this->apellidoDelFabricante = "ACME(correcaminos);";
		echo "<br>";
		echo $this->precio = 300;
		echo ";";
		echo "<br>";
		echo '***** fin Cambiando el estado inicial(DEFECTO) del objeto  por medio de instancia $producto1 *****';
	}
}

$producto1 = new MetodosEnPhp();// Objeto producto con estado por defecto.


echo "****** inicio Objeto producto con estado por defecto (INICIAL). *****";
echo "<br>";
echo $producto1->producto;
echo "<br>";
echo $producto1->nombreDelFabricante;
echo "<br>";
echo $producto1->apellidoDelFabricante;
echo "<br>";
echo $producto1->precio;
echo ";";
echo "<br>";
echo "****** fin  Objeto producto con estado por defecto (INICIAL). *****";

echo $producto1->getInformacionProducto();

