<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';




$bike = new Bicycle("green", 1); // Instanciation d'un nouvel objet $bike de la classe Bicycle

$bike->setColor("yellow");
$bike->getCurrentSpeed();

// Moving bike
//echo $bike->forward();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();
//echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
//echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider de la classe Bicycle
$rockrider = new Bicycle("blue", 1);
$rockrider->setColor("yellow");


// Instanciation d'un nouvel objet $tornado de la classe Bicycle
$tornado = new Bicycle("black",1);
$tornado->getColor("black");
$tornado->forward();


// Instanciation d'un nouvel objet $myCar
$myCar = new Car('grey', 5, 'diesel');

try {
    $myCar->start();
} catch (Exception $e) {
    //echo "Exception received : " . $e -> getMessage();
    //echo "<br>";
    //echo "Ok, je retire le frein à main";
    //echo "<br>";
    //$myCar -> setParkBrake(false);
} finally {;
    //echo "Supeeeeer, ma voiture roule comme un donut";
    //echo "<br>";
}

//echo $myCar->forward();
//echo $myCar->brake();
//echo $myCar->getNbWheels();
//echo $myCar->getCurrentSpeed();
//echo $myCar->getColor();
//echo $myCar->getNbSeats();
//echo $myCar->getEnergy();
//echo $myCar->getEnergyLevel();

$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();
//echo "<br>";
$bicycle -> setCurrentSpeed(20);
try {
    echo $bicycle -> switchOn();
} catch (Exception $e) {
    echo "roule plus vite pour allumer la dynamo !";
} finally {
    echo $bicycle -> switchOn();
}


$car = new Car('green', 4, 'electric');
//echo $car->forward();

// Instanciation de l'objet Truck
$myTruck = new Truck('yellow',3,33,0);


//echo $myTruck->start();
//echo $myTruck->forward();
echo $myTruck->setCurrentSpeed(5);
echo $myCar -> switchOff();
//echo $myTruck->brake();
//$myTruck-> setLoading(30);
//echo $myTruck->isFull();


?>