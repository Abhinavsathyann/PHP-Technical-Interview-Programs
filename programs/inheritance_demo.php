<?php
// Example of inheritance
class Vehicle {
    function message() {
        echo "This is a Vehicle.\n";
    }
}

class Car extends Vehicle {
    function message() {
        echo "This is a Car, which is a type of Vehicle.";
    }
}

$obj = new Car();
$obj->message();
?>
