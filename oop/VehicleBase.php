<?php  

namespace Vehicles;

abstract class VehicleBase //he vuelto la clase abstracta, para que no sea posible ser instanciadas, solo sirven para ser clases base de otras subclases.
{
	protected $owner; // privada solo se puede acceder atravez de metodo get dentro de la misma clase, con protected y es accesible atravez de su clase o clases hijas.

	public function move(){
		echo $this->startEngine();
		echo '<br>moving<br>';
	}

	public function getOwner(){
		return $this->owner;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

	//Constructor y destructor
	public function __construct($ownerName){
		$this->owner = $ownerName;
		echo 'constructor<br>';
	}
	public function __destruct(){
		echo '<br><br>destruct';
	}

	public abstract function startEngine();

}

?>