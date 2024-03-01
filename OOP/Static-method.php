<?php

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();


// //Example Explained
// Here, we declare a static method: welcome(). Then, we call the static method by using the class name, double colon (::), and the method name (without creating a class first).

// PHP - More on Static Methods
// A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::):

// Example

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }

  public function __construct() {
    self::welcome();
  }
}

new greeting();

// Static methods can also be called from methods in other classes. To do this, the static method should be public:

// Example

class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}

// To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected.

// Example

class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this->websiteName = parent::getWebsiteName();
  }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>
