<?php declare(strict_types=1);

class ClasesDinamicas
{

	public ?string $producto = "Articulo A";
	public ?string $nombreDelFabricante = "ACME";
	public ?string $apellidoDelFabricante = "Bombas Caza corre caminos";
	public ?int $precio = 1000;

}


$producto1 = new ClasesDinamicas();
$producto2 = new ClasesDinamicas();


echo $producto1->apellidoDelFabricante . ": marca ";
echo $producto2->nombreDelFabricante;
echo "<br>";

// Reasignando valor a una propiedad en forma directa ( MALA  PRACTICA DESACONSEJADA)
echo $producto2->apellidoDelFabricante = "! Pero Todas ¡";
echo "<br>";

// Asignaciones dinamicas una propiedad a un objeto ( MALA  PRACTICA DESACONSEJADA)
$producto2->utilidadFavorCorrecaminos = "Terminan explotandole al Coyote";
echo $producto2->utilidadFavorCorrecaminos;

