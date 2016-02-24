<?php


// Creating a new class is easy... class names should begin with an uppercase letter. As we know, php is pretty loosy-goosey so it will take almost anything. Use of numbers is strongly discouraged. Underscores may be used in place of file path seperators '/'. Avoid http://ca2.php.net/manual/en/reserved.php

class MyClass{
    public $prop1 ="I'm a property!";

}


//Instatiating a class
$obj=new MyClass;

//to see the contents
echo $obj->prop1; // output propery value

?>
