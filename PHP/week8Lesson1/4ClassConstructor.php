<?php
//Constructor
//Destructor
//unset()

class MyClass {
    public $prop1 = "I'm a class property!";

    // our fist magic method, the constructor -  the magic method __construct(), which is called automatically whenever a new object is created
    public function __construct(){
        echo 'An instance of the class "', __CLASS__, '" was initiated!<br/>';
    }

    public function __destruct(){
        echo ' An instance of the class "', __CLASS__, '" was destroyed!<br/>';

    }

    public function setProperty($newval) {
        $this->prop1 = $newval;
    }

    public function getProperty() {
        return $this->prop1 . "<br />";
    }
}

// Create a new object
$obj = new MyClass;
$obj2 = new MyClass;

// Get the value of $prop1
echo $obj->getProperty();

//When the end of a file is reached, PHP automatically releases all resources. We can do it manually though...
// Destroy the object
unset($obj);
unset($obj2);



// Output a message at the end of the file
echo "End of file.<br />";

?>
