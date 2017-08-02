<?php  

namespace Vehicles;

class VehicleBase
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

?>