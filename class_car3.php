<?php
class Car{
var $wheels = 4;
var $hood = 1;
var $engine = 1;
var $doors = 5;
    function moveWheels(){
        $this->moveWheels();
    }

    function changeDoors(){
        $this->doors = 6;
    }
}
$bmw = new Car();
$merces = new Car();
$track = new Car();

echo $bmw->wheels . "<br>";
$track->changeDoors();
echo $track->doors;

?>
