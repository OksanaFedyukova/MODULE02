<?php
//Creamos la clase Coche solo con propiedades
class Coche {
	public $color;
	public $potencia;
    public $modelo;
	public $marca;
}
//Creamos el objeto $miCoche que es una instancia de la clase Coche
$miCoche = new Coche();
$miCoche->color = 'rojo';
$miCoche->potencia = 120;
$miCoche->marca = 'audi';
$miCoche->modelo = 'A3';
//Mostramos las propiedades de $miCoche
echo $miCoche->marca.'<br>';
echo $miCoche->modelo.'<br>';
echo $miCoche->color.'<br>';
echo $miCoche->potencia.'<br>';

//Separamos los 2 objetos que estamos creando.
echo '<hr>';

//Creamos el objeto $tuCoche que es una instancia de la clase Coche
$tuCoche = new Coche();
$tuCoche->marca='Toyota';
$tuCoche->modelo='Rav4';
$tuCoche->color='Perla blanco';
$tuCoche->potencia='140';
//Mostramos las propiedades de $tuCoche
echo $tuCoche->marca.'<br>';
echo $tuCoche->modelo.'<br>';
echo $tuCoche->color.'<br>';
echo $tuCoche->potencia.'<br>';





