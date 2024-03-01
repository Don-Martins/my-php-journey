<?php
//A class is a template for objects, and an object is an instance of a class

class Fruit {
    // Properties
    public $name;
    public $color;
  
    // Methods
    function set_name($name) {
      $this->name = $name;
    }
    function get_name() {
      return $this->name;
    }
  }
  
  $apple = new Fruit();
  $banana = new Fruit();
  $apple->set_name('Apple');
  $banana->set_name('Banana');
  
  echo $apple->get_name();
  echo "<br>";
  echo $banana->get_name();

  //So, where can we change the value of the $name property? There are two ways:

///1. Inside the class (by adding a set_name() method and use $this):

//Example

class Fruit {
  public $name;
  function set_name($name) {
    $this->name = $name;
  }
}
$apple = new Fruit();
$apple->set_name("Apple");

//2. Outside the class (by directly change the property value):

//Example

class Fruit {
  public $name;
}
$apple = new Fruit();
$apple->name = "Apple";
?>

