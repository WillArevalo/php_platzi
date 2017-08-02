<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';
//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Truck, Car, ToyCar};

try{//Intentar
	echo 'Class ToyCar: <br>';
	$toycar = new ToyCar('Elmer'); //DEclaro un objeto de tipo ToyCar
	$toycar->move(); //metodo de su propia clase
} catch(Exception $e){//Capturar
	echo 'This is a toy<br>';
	//log...
}finally{ //finalmente, este codigo se ejecutara pase lo que pase.
	echo 'Finally<br><br>';
}


echo 'Class Car: <br>';
$car = new Car('Juakin'); //Declaro un objeto de tipo Car
$car->move(); //metodo de su propia clase
echo 'GPS pos: ' . $car->getPos();
//echo 'Owner car 1: ' . $car->getOwner();

echo 'Class truck 1: <br>';
$truck1 = new Truck('Will', 'Pickup');
$truck1->move(); //metodo de su clase
//echo 'Owner Truck: ' . $truck->getOwner();

echo 'Class truck 2:<br>';
$truck2 = new Truck('German', 'Pickup');
$truck2->move(); //metodo de su clase


echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';



//Demostrando que no es bueno tener un clase vehicle
//$v1 = new \Vehicles\VehicleBase('Alex');
//$v1->move();


/*Interfaces!!!
	permiten definir que metodos deben implementar ciertas clases sin necesidad de decir como deben ser implementadas. 
	Es decir agregar las firmas de las funciones y de esa forma sabremos que necesita implementar el metodo
	a diferencia de las clases abstractas si pueden tener contenido en cambio la interfaz no.
	actuara como otro objeto.
*/
//$ser = serialize($car);
//$newCar = unserialize($ser);

//echo 'NewCar Owner '. $newCar->getOwner() . '<br>';
?>