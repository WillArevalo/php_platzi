<?php  

namespace Vehicles;
//Trait es para agregar un rasgo a una clase, tal como lo hace herencia pero multiple
trait GPSTrait {
	public function getPos() {
		return 'lat, long <br>';
	}
}

?>