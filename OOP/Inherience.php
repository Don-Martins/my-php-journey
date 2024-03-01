<?php
// Inheritance in OOP = When a class derives from another class.

// The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

// An inherited class is defined by using the extends keyword.

class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red");
  $strawberry->message();
  $strawberry->intro();


  class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  //Example 2
  class Strawberry extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberry("Strawberry", "red", 50);
  $strawberry->intro();

  //Example 3

  class Fruit {
    final public function intro() {
      // some code
    }
  }
  
  class Strawberry extends Fruit {
    // will result in error
    public function intro() {
      // some code
    }
  }
?>