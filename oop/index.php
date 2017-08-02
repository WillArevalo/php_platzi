<?php  

/**
* 
*/
class Car
{
	private $owner;

	public function move(){
		echo '<br>moving<br>';
	}

	public function getOwner(){
		return $this->owner;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

	public function __construct($ownerName){
		$this->owner = $ownerName;
		echo 'constructor<br>';
	}
	public function __destruct(){
		echo '<br>destruct';
	}

}
echo 'Class Car: <br>';


$car = new Car('Max'); //DEclaro un objeto de tipo Car
$car2 = new Car('Will');

$car->move();

echo 'Owner car 1: ' . $car->getOwner();
echo '<br>';
echo 'Owner car 2: ' . $car2->getOwner();

?>