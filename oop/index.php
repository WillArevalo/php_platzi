<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

//use Vehicles\Car;
//use Vehicles\Truck;
use Vehicles\{Truck, Car};

echo 'Class Car: <br>';


$car = new Car('Juakin'); //DEclaro un objeto de tipo Car
$car->move(); //metodo de su propia clase
//echo 'Owner car 1: ' . $car->getOwner();
echo '<br><br>';

echo 'Class truck 1: <br>';
$truck = new Truck('Will', 'Pickup');
$truck->move(); //metodo de su clase
//echo 'Owner Truck: ' . $truck->getOwner();

echo 'Class truck 2: <br>';
$truck = new Truck('German', 'Pickup');
$truck->move(); //metodo de su clase


echo '<br>Total Trucks: ' . Truck::getTotal() . '<br>';
?>