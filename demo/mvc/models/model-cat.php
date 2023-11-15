<?php
include_once("models/model-animal.php");

class Cat extends Animal {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function makeSound() {
        echo "The cat quarrels.";
    }
}
?>