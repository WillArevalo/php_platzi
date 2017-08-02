<?php  

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase
{

	private static $count = 0; //Static es para ser accesible sin instanciar la clase, se utiliza con metodos y propiedas, es decir, si pongo el contador afectara a todos los objetos con esa clase.

	private $type;

	public function __construct($ownerName, $type){
		
		$this->type = $type;
		$this->owner = $ownerName;
		self::$count++;
		//parent::__construct($ownerName); //No se llama efectivamente a la clase padre y al constructor si no lleva parent::

		// estamos utilizando este constructor y no el de arriba por lo tanto no sale el mensjae de constructor
	}
	public function move(){
		echo 'Truck: ' . $this->type . ' moving<br>';
	}
	public static function getTotal(){
		return self::$count;
	}
}

?>