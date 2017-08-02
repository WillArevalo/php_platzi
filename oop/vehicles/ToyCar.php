<?php  

namespace Vehicles;

require_once 'VehicleBase.php';

class ToyCar extends VehicleBase{
	//public function move(){
	//	echo 'Car: moving<br>';
	//}
	public function startEngine(){
		//Excepciones: throw(lanzar nueva \Exception())
		throw new \Exception("Engine not found!");
		
	}

}


?>