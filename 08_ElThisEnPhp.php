<?php declare(strict_types=1);


class ElThisEnPhp
{

	public ?string $producto;
	public ?string $nombreDelFabricante;
	public ?string $apellidoDelFabricante;
	public ?int $precio;


	public function __construct(string $producto, string $nombreDelFabricante, string $apellidoDelFabricante, int $precio)
	{
		$this->producto = $producto;
		$this->nombreDelFabricante = $nombreDelFabricante;
		$this->apellidoDelFabricante = $apellidoDelFabricante;
		$this->precio = $precio;
	}



	/**
	 * La función `getInformacionThis` en PHP genera información sobre el valor de `$this` y establece una
	 * propiedad `precio3` en 500.
	 */
	public function getInformacionThis()
	{
		echo '***************** inicio  mostrando valor Valor del $this con el metodo var_dump($this); *******************';
		var_dump(value: $this);
		echo '$this -> precio3 = 500';
		echo "<br>";
		echo ' ElThisEnPhp -> precio3 = 500;';
		echo "<br>";
		echo "<br>";
		echo '***************** fin  mostrando valor Valor del $this con el metodo var_dump($this); *******************';
		echo "<br>";
	}


	/**
	 * La función PHP `phpgetInformacionProducto` establece valores personalizados para las propiedades
	 * del producto como nombre, fabricante y precio.
	 */
	public function phpgetInformacionProducto(): void
	{

		echo "<br>";
		echo "<br>";
		//*****  Mostramndo  estado inicial del objeto  por medio de instancia $producto1 *****';
		echo '***** inicio Mostramndo  estado inicial del objeto  por medio de instancia $producto1 *****';

		echo "<br>";
		echo $this->producto;
		echo "<br>";
		echo $this->nombreDelFabricante;
		echo "<br>";
		echo $this->apellidoDelFabricante;
		echo "<br>";
		echo $this->precio;
		echo ";";
		echo "<br>";
		echo '***** fin  Mostramndo  estado inicial del objeto  por medio de instancia $producto1 *****';

	}
}


$producto1 = new ElThisEnPhp(producto: "Camisa", nombreDelFabricante: "Juan", apellidoDelFabricante: "Perez", precio: 500);


$producto1->getInformacionThis();
$producto1->phpgetInformacionProducto();




