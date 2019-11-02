<?php
class Car{

    function moveWheels(){
        echo "Wheels move";
    }
}
$bmw = new Car();
$merces = new Car();

$bmw->moveWheels();
$merces->moveWheels();
?>
