<?php
class Car{
public $wheels = 4;
protected $hood = 1;
private $engine = 1;
var $doors = 5;

    function moveWheels(){
        $this->moveWheels();
    }

    function showProperties(){
        echo $this->doors;
        echo $this->hood;
        echo $this->engine;
        echo $this->wheels;
    }
}
$bmw = new Car();
echo $bmw->showProperties();

class Semi extends Car{
    function showProperties()
    {
        parent::showProperties(); // TODO: Change the autogenerated stub
            echo $this->doors;
    }
}

?>
