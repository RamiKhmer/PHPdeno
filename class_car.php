<?php 


class Car {
    var $door = 3;


    function CarMove(){

        $this->door = 10;
        return "Car was Moving";

    }

}

// if(class_exists("Car")){
//     echo "Class Was Created";
// }
// else{
//     echo "No";
// }

// if(method_exists("Car","CarMove")){
//     echo "Here is ";
// }
// else{
//     echo "No";
// }

$bmw = new Car();
echo "1 => ".$bmw->door;
echo "<br>";
$bmw->CarMove();

echo "2 => ".$bmw->door;

echo "<hr>";

class Car2 extends Car{



}

$bmw2 = new Car2;

echo "Here is the Inheritance ".$bmw2->door;
$bmw2->CarMove();
echo "Here is the Inheritance ".$bmw2->door;







?>