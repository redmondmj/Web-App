<?php

class MyClass {
    public $prop1 = "I'm a class property!";

 	// You may encounter a leading _ this is a hangover from PHP4 that did not account for private class functions. You may also encounter double underscores such as __construct() these are magic methods... ooohhhh here be dragons.

    public function setProperty($newValue){
        $this -> prop1=$newValue;
    }
    public function getProperty(){
        return $this->prop1 . "<br/>";
    }
}

// Create an object... or two
$obj = new MyClass;
$obj2 = new MyClass;

// Get the value of $prop1 from both objects
echo $obj->getProperty();
echo $obj2->getProperty();

// Set new values for both objects
$obj->setProperty("I'm a new property value!");
$obj2->setProperty("I'm a new property value for obj2!");


// Output both objects' $prop1 value
echo $obj->getProperty();
echo $obj2->getProperty();

