/* <?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Method to set the properties
  function set_details($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  // Method to display the properties
  function get_details() {
    echo "Name: ". $this->name . ". Color: " . $this->color .".<br>";
  }
}
?>
<?php
$apple = new Fruit();
var_dump($apple instanceof Fruit);
?> */


<?php

class Student {
    public $name;
    public $age;

    public function sayHello() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

// Create object
$student1 = new Student();

// Set values
$student1->name = "Ali";
$student1->age = 20;

// Call method
$student1->sayHello();

?>
