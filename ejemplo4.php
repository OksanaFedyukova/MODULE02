<?php
//Creamos la clase Coche solo con propiedades
class Coche {
	//Propiedades
	private $color;
	public $potencia;
    public $modelo;
	public $marca;
	//Método construct 
	function __construct($color,$potencia,$modelo,$marca) {
		$this->setColor($color);
		$this->setPotencia($potencia);
		$this->setMarca($marca);
		$this->setModelo($modelo);	
	}
	
	//Métodos getters
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
	//Métodos setters
	function setColor($COLOR) {
		$this->color = $COLOR;
	}
	function setPotencia($potencia) {
		$this->potencia = $potencia;
	}
	function setModelo($model) {
		$this->modelo = $model;
	}
	function setMarca($marca) {
		$this->marca = $marca;
	}	
	
	//Resto de métodos
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

$miCoche = new Coche('rojo',120,'A3','Audi');
//Mostramos las propiedades de $miCoche
$miCoche->verDatos();
echo $miCoche->verDatosFuncion();
//Separamos los 2 objetos que estamos creando.
echo '<hr>';
//Creamos el objeto $tuCoche que es una instancia de la clase Coche
//$color,$potencia,$modelo,$marca
$tuCoche = new Coche('Perla blanco',140,'Rav4','Toyota');
//Mostramos las propiedades de $tuCoche
$tuCoche->verDatos();
echo $tuCoche->verDatosFuncion();





