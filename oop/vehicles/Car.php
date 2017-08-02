<?php  

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable
{
	//public function move(){
	//	echo 'Car: moving<br>';
	//}
	public function startEngine(){
		return 'Car: start engine';
	}

	public function serialize(){
		echo 'Serialize<br>';
		return $this->owner;
	}
	public function unserialize($serialized){
		echo 'unserialize<br>';
		$this->owner = $serialized;
	}

}


?>