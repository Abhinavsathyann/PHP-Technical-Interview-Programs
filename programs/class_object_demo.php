<?php
// Simple class and object example
class Student {
    public $name;
    public $age;

    function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    function display() {
        echo "Name: $this->name, Age: $this->age";
    }
}

$student = new Student("Abhinav", 20);
$student->display();
?>
