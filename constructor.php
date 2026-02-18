<?php

class Student {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function info() {
        echo "Name: $this->name <br>";
        echo "Age: $this->age";
    }
}

$student1 = new Student("Fazliddin", 19);
$student1->info();

?>
