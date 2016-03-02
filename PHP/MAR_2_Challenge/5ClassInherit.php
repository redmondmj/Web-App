<?php
// echo object as string
// inheritance
//

class MyClass {
    public $prop1 = "I'm a class property!";

    public function __construct() {
        echo 'The class "', __CLASS__, '" was instantiated!<br />';
    }

    public function __destruct() {
        echo 'The class "', __CLASS__, '" was destroyed.<br />';
    }

    public function __toString(){
        echo "Using the toString method: ";
        return $this->getProperty();
    }

    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    public function getProperty() {
        return $this->prop1 . "<br />";
    }
}
 // the extends keyword indicates that MyOtherClass inherits from MyClass

class MyOtherClass extends MyClass{
    public function __construct(){
        parent::__construct();
        echo "a new constructor in " . __CLASS__ .".<br>";
    }
    public function newMethod(){
        echo "from a new method in " . __CLASS__ . ".<br>";
    }
}

// Create a new object
$newobj = new MyOtherClass;

// Output the object as a string
echo $newobj->newMethod();

// Destroy the object
unset($newobj);

// Output a message at the end of the file
echo "End of file.<br />";

?>
