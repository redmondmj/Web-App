<?php
 /**
* @author: The author of the current element (which might be a class, file, method, or any bit of code) are listed using this tag. Multiple author tags can be used in the same DocBlock if more than one author is credited. The format for the author name is John Doe <john.doe@email.com>.
* @copyright: This signifies the copyright year and name of the copyright holder for the current element. The format is 2010 Copyright Holder.
* @license: This links to the license for the current element. The format for the license information is
* http://www.example.com/path/to/license.txt License Name.
* @var: This holds the type and description of a variable or class property. The format is type element description.
* @param: This tag shows the type and description of a function or method parameter. The format is type $element_name element description.
* @return: The type and description of the return value of a function or method are provided in this tag. The format is type return element description.
*/


/**
 * A simple class
 *
 * This is the long description for this class,
 * which can span as many lines as needed. It is
 * not required, whereas the short description is
 * necessary.
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author Mr. Magoo <m.magoo@email.com
 * @copyright 2014 m.magoo design
 * @license http://www.php.net/license/3_01.txt PHP License 3.01
*/
class SimpleClass {
    /**
     * A public variable
     *
     * @var string stores data for the class
     */
    public $foo;

    /**
     * Sets $foo to a new value upon class instantiation
     *
     * @param string $val a value required for the class
     * @return void
     */
    public function __construct($val) {
        $this->foo = $val;
    }

    /**
     * Multiplies two integers
     *
     * Accepts a pair of integers and returns the
     * product of the two.
     *
     * @param int $bat a number to be multiplied
     * @param int $baz a number to be multiplied
     * @return int the product of the two parameters
     */
    public function bar($bat, $baz) {
        return $bat * $baz;
    }
}


?>
