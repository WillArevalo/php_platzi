<?php  

/**
* 
*/
class Car
{
	private $owner;

	public function move(){
		echo 'moving<br>';
	}

	public function getOwner(){
		return $this->owner;
	}

	public function setOwner($owner){
		$this->owner = $owner;
	}

	//function __construct(argument)
	//{
		# code...
	//}

}
echo 'Class Car: <br>';


$car = new Car(); //DEclaro un objeto de tipo Car
$car2 = new Car();

$car->move();

$car->setOwner('Alex');
$car2->setOwner('Will');


echo 'Owner car 1: ' . $car->getOwner();
echo '<br>';
echo 'Owner car 2: ' . $car2->getOwner();

?>