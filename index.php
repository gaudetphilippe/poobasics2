<?php

require_once 'Truck.php';

$Truck1 = new Truck(8000, 'blue', 4, 'fuel');

$Truck2 = new Truck(8000, 'red', 6, 'electric');

echo $Truck1->forward();
$Truck1->setCurrentSpeed(50);
echo '<br> The truck is driving : ' . $Truck1->getcurrentSpeed() . ' km/h' . '<br>';

echo $Truck1->brake();
echo '<br> Truck speed : ' . $Truck1->getcurrentSpeed() . ' km/h' . '<br>';
echo $Truck1->brake();

$Truck1->setLoading(5000);
$Truck1->getLoading();


echo '<br> The loading of the blue truck is ' . $Truck1->loading . ' kg while its maximum capacity is '. $Truck1->storageCapacity . ' kg.' . '<br>';
echo $Truck1->isFullOrNot();

$Truck2->setLoading(8000);
$Truck2->getLoading();

echo '<br> The loading of the red truck is ' . $Truck2->loading . ' kg while its maximum capacity is '. $Truck2->storageCapacity . ' kg.' . '<br>';
echo $Truck2->isFullOrNot();