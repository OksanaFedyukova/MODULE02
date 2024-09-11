<?php
//Creamos la clase Coche solo con propiedades
class Coche {
	//Propiedades
	public $color;
	public $potencia;
    public $modelo;
	public $marca;
	
	//Métodos
	function getColor() {
		return $this->color;
	}
	function getPotencia() {
		return $this->potencia;
	}
	function getModelo() {
		return $this->modelo;
	}
	function getMarca() {
		return $this->marca;
	}
	function verDatos() {
		echo 'verDatos:<br>'; 
		echo $this->getMarca().'<br>';
		echo $this->getModelo().'<br>';
		echo $this->getColor().'<br>';
		echo $this->getPotencia().'<br>';
	}
	function verDatosFuncion() {
		return 'verDatosFuncion:<br>'.$this->getMarca().'<br>'.$this->getModelo().'<br>'.$this->getColor().'<br>'.$this->getPotencia().'<br>';
		
	}
}
//Creamos el objeto $miCoche que es una instancia de la clase Coche
$miCoche = new Coche();
$miCoche->color = 'rojo';
$miCoche->potencia = 120;
$miCoche->marca = 'audi';
$miCoche->modelo = 'A3';
//Mostramos las propiedades de $miCoche
$miCoche->verDatos();
echo $miCoche->verDatosFuncion();

//Separamos los 2 objetos que estamos creando.
echo '<hr>';

//Creamos el objeto $tuCoche que es una instancia de la clase Coche
$tuCoche = new Coche();
$tuCoche->marca='Toyota';
$tuCoche->modelo='Rav4';
$tuCoche->color='Perla blanco';
$tuCoche->potencia='140';
//Mostramos las propiedades de $tuCoche
$tuCoche->verDatos();
echo $tuCoche->verDatosFuncion();





