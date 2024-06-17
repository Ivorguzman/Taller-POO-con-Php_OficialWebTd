<?php
declare(strict_types=1);
/*
declare(strict_types=1) se utiliza para habilitar el modo estricto de tipos en un archivo. El número 1 indica que el modo estricto está activado. Cuando el modo estricto está habilitado, PHP exige que los tipos de datos de los argumentos de las funciones y los valores devueltos coincidan exactamente con los tipos declarados
*/


class PropirdsesEnPhp
{
	// Estado Inicial de la  instancia  por defecto
	public string $producto = "Caza corre caminos;";
	public string $nombreDelFabricante = "ACME;";
	public string $apellidoDelFabricante = "Coyote;";
	public int $precio = 500;
	


	/*.
	 ?string|?int: Esta es una declaración de tipo con un signo de interrogación antes de string o el int, lo que significa que la propiedad $producto puede ser de tipo string, int o también puede ser null
	 */


	public ?string $producto2 = null;

	// El tipo (?string) permite uasr como valor predeteminado para tipo int el valor null
	public ?string $nombreDelFabricante2 = null;

	// El tipo (?string) permite uasr como valor predeteminado para tipo int el valor null
	public ?string $apellidoDelFabricante2 = null;

	// El tipo (?int) permite uasr como valor predeteminado para tipo int el valor null
	public ?int $precio2 = null;





	// Forma extremadamente permisiva desaconsejada en su uso cotidiano sin tipaje;
	public $producto3 = "Caza corre caminos;";

	public $nombreDelFabricante3 = "ACME;";

	public $apellidoDelFabricante3 = "Coyote;";

	public $precio3 = 500;

	public $prurbaDelThis = null;




	public function phpgetInformacionProducto(): void
	{

		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "<br>";
		// Cambiando el estado inicial(DEFECTO) del objeto  por medio de instancia $producto1
		echo '***** inicio Cambiando el estado inicial(DEFECTO) del objeto  por medio de instancia $producto1 *****';
		echo "<br>";
		echo "<br>";

		echo "------------------Inicio valor del this-----------------------";
		var_dump(value: $this);
		echo '$this -> precio3 = 500';
		echo "<br>";
		echo ' PropirdsesEnPhp -> precio3 = 500;';
		echo "<br>";
		echo "------------------Fin valor del this---------------------------";
		echo "<br>";

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





$producto1 = new PropirdsesEnPhp();// Objeto producto con estado por defecto.


echo "****** inicio Objeto producto con estado por defecto (INICIAL). *****";
echo "<br>";
echo $producto1->producto;
echo "<br>";
echo $producto1->nombreDelFabricante;
echo "<br>";
echo $producto1->apellidoDelFabricante;
echo "<br>";
echo $producto1->precio = 500;
echo ";";
echo "<br>";
echo "****** fin  Objeto producto con estado por defecto (INICIAL). *****";


echo $producto1->phpgetInformacionProducto();
