<?php  

/**
* 
*/
class Vehicle
{
	protected $owner; // privada solo se puede acceder atravez de metodo get dentro de la misma clase, con protected y es accesible atravez de su clase o clases hijas.

	public function move(){
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

}

//Herencia
/**
* 
*/
class Car extends Vehicle
{
	public function move(){
		echo 'Car: moving<br>';
	}
}

class Truck extends Vehicle
{
	private $type;

	public function __construct($ownerName, $type){
		
		$this->type = $type;
		$this->owner = $ownerName;
		//parent::__construct($ownerName); //No se llama efectivamente a la clase padre y al constructor si no lleva parent::

		// estamos utilizando este constructor y no el de arriba por lo tanto no sale el mensjae de constructor
	}
	public function move(){
		echo 'Truck: ' . $this->type . ' moving<br>';
	}
}

echo 'Class Car: <br>';


$car = new Car('Juakin'); //DEclaro un objeto de tipo Car
$car->move(); //metodo de su propia clase
echo 'Owner car 1: ' . $car->getOwner();
echo '<br><br>';
echo 'Class truck: <br>';

$truck = new Truck('Will', 'Pickup');
$truck->move(); //metodo de su clase
echo 'Owner Truck: ' . $truck->getOwner();

?>