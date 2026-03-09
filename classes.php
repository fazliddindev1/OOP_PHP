<?php

class Cars{
    public $name;
    public $color;

    function set_data($name,$color){
        $this->name = $name;
        $this->color = $color;
    }
    function get_data(){
        echo "Name: " . $this->name;
        echo " Color: " . $this->color;
        echo "<br>";    
    }

}

$car = new Cars();
$car-> set_data("BMW","Black");
$car-> get_data();

$car2 = new Cars();
$car2-> set_data("BYD","White");
$car2-> get_data();
