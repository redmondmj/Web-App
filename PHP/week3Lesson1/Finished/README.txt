What is a variable?

A name? How about:
username

Add a $ and it's alive!
$username

Not much  good though without a value, so...
$username="matt";

Remember the importance of using meaningful names... you might have a hard time remembering 
whether $p means password, page, or profile after a few thousand lines of code.

OK... good class. Thanks for coming out!

You will create two main types of variables in your PHP code: scalar and array.
Scalar variables contain only one value at a time, and arrays contain a list of values
or even another array.

When we assign values to variables we will typically use one of the following types:

Integer: numbers (decimal)... such as 1, 34, 8393 You can also use octal and hexadecimal notation:
0123 = 83 octal
0x1A=26 hex
0b11111111=255 binary if your feeling brave

Interesting: For a long time php was limited to 32bit integers (2147483648 - 2 billion ish), but PHP 7 introduced 64 bit integers (platform dependant) which may come in handy when dealing with large numbers (the new max is 9,223,372,036,854,775,807 nine quintillion two hundred twenty-three quadrillion three hundred seventy-two trillion thirty-six billion eight hundred fifty-four million seven hundred seventy-five thousand eight hundred seven). Not an issue with my bank account, but Paypal did have and issue with it in 2013 when the debited Chris Reynolds' account $92 Quadrillion. 

Floating point integers... "floats or doubles or reals"
1.5, 8.333, 20.454564

Strings or text... as we've already seen... stored in "quotes".

--------------------------------------------------------------------------------------------------

<?php
$intVar = "955421";
$floatVar = "1542.2232235";
$stringVar = "This is a string.";

echo "<p>integer: $intVar</p>";
echo "<p>float: $floatVar</p>";
echo "<p>string: $stringVar</p>";

?>


Save as printVarScript.php
-----------------------------------------------------------------------------------

Local and Global variables
We're using local variables... they only work within their own script and can not reachout to other 
scripts unless you specify that they can do so. We'll do this a little later when we create custom functions.


-----------------------------------------------------------------------------------

Pre defined variables:
You may have seen some of these if you reviewed the content of the phpinfo() function. Let's take a look...

The following is a list of superglobals that your will find are used quite extensively:
$_GET contains any variables provided to a script through the GET method.
$_POST contains any variables provided to a script through the POST method.
$_COOKIE contains any variables provided to a script through a cookie.
$_FILES contains any variables provided to a script through file uploads.
$_ENV contains any variables provided to a script as part of the server environment.
$_SESSION contains any variables that are registered in a session.

----------------------------------------------------------------------------------

Using Constants:

<?php
define("MYCONSTANT", "This is a test of defining constants.");
echo MYCONSTANT;
// point out that constants should be uppercase and should not start with a number or __
?>

save as constants.php

-----------------------------------------------------------------------------------

Let's test out some pre-defined constants... referred to as magic constants:
__FILE__ The name of the script file being parsed.
__LINE__ The number of the line in the script being parsed.
PHP_VERSION The version of PHP in use.
PHP_OS The operating system using PHP.

<?php
echo "<br>This file is ".__FILE__;
//point out concatenation
echo "<br>This is line number ".__LINE__;
echo "<br>I am using ".PHP_VERSION;
?>

Save this as constants2.php
-------------------------------------------------------------------------------------

Operators? What are operators? We already used one right? What was it?

Types of PHP operators:

Assignment operators. Assign values to variables. Can also add to or subtract
from a variable’s current value.

Arithmetic operators. Addition, subtraction, division, and multiplication occur
when these operators are used.

Comparison operators. Compare two values and return either true or false. You
can then perform actions based on the returned value.

Logical operators. Determine the status of conditions.

-------------------------------------------------------------------------------------
Assignment Operators

<HTML>
<HEAD>
<TITLE>Using Assignment Operators</TITLE>
</HEAD>
<BODY>
<?php
$origVar = 100;
echo "<P>Original value is $origVar</P>";
//Add to that value and then print it
$origVar += 25;
echo "<P>Added a value, now it's $origVar</P>";
//Subtract from that value and then print it
$origVar -= 12;
echo "<P>Subtracted a value, now it's $origVar</P>";
//Concatenate a string and then print it:
$origVar .= " chickens";
echo "<P>Final answer: $origVar</P>";
?>
</BODY>
</HTML>

Save as assignscript.php
---------------------------------------------------------------------------
Arithmetic Operators
<HTML>
<HEAD>
<TITLE>Using Arithmetic
Operators</TITLE>
</HEAD>
<BODY>
//Start a PHP block, create two variables with values, and print the values
<?
$a = 85;
$b = 24;
echo "<P>Original value of \$a is $a and \$b is $b</P>";
//if you escape the dollar sign (\$), it will print literally instead of being interpreted as a variable.
//Add the two values and print the result
$c = $a + $b;
echo "<P>Added \$a and \$b and got $c</P>";
//Subtract the two values and print the result
$c = $a - $b;
echo "<P>Subtracted \$b from \$a and got $c</P>";
//Multiply the two values and print the result
$c = $a * $b;
echo "<P>Multiplied \$a and \$b and got $c</P>";
//divide
$c = $a / $b;
echo "<P>Divided \$a by \$b and got $c</P>";
//Check the modulus of the two values and print the result:
$c = $a % $b;
echo "<P>The modulus of \$a and \$b is $c</P>";
?>
</BODY>
</HTML>

save as arithmeticscript.php
---------------------------------------------------------------------------------------------
Comparison Operators

<HTML>
<HEAD>
<TITLE>Using Comparison Operators</TITLE>
</HEAD>
<BODY>
<?
$a = 21;
$b = 15;
echo "<P>Original value of \$a is $a and \$b is $b</P>";
//test whether $a is equal to $b.
if ($a == $b) {
echo "<P>TEST 1: \$a equals \$b</P>";
} else {
echo "<P>TEST 1: \$a is not equal to \$b</P>";
}
// point out Conditional expressions are enclosed in parentheses
//test whether $a is not equal to $b. 
if ($a != $b) {
echo "<P>TEST 2: \$a is not equal to \$b</P>";
} else {
echo "<P>TEST 2: \$a is equal to \$b</P>";
}
//The curly braces { and } separate the blocks of statements within a control structure.
//test whether $a is greater than $b.
if ($a > $b) {
echo "<P>TEST 3: \$a is greater than \$b</P>";
} else {
echo "<P>TEST 3: \$a is not greater than \$b</P>";
}
//test whether $a is less than $b. 
if ($a < $b) {
echo "<P>TEST 4: \$a is less than \$b</P>";
} else {
echo "<P>TEST 4: \$a is not less than \$b</P>";
}
//$a is greater than or equal to $b.
if ($a >= $b) {
echo "<P>TEST 5: \$a is greater than or equal to \$b</P>";
} else {
echo "<P>TEST 5: \$a is not greater than or equal to \$b</P>";
}
//$a is less than or equal to $b.
if ($a <= $b) {
echo "<P>TEST 6: \$a is less than or equal to \$b</P>";
} else {
echo "<P>TEST 6: \$a is not less than or equal to \$b</P>";
}
?>
</BODY>
</HTML>

save as comparisonScript.php

--------------------------------------------------------------------------------------
Logical Operators

determine the status of conditions...

<HTML>
<HEAD>
<TITLE>Using Logical Operators</TITLE>
</HEAD>
<BODY>
<?
$degrees = "95";
$hot = "yes";
//test whether $degrees is greater than 100 or if the value of $hot is yes.
if (($degrees > 100) || ($hot == "yes")) {
echo "<P>TEST 1: It's <strong>really</strong> hot!</P>";
} else {
echo "<P>TEST 1: It's bearable.</P>";
}
/*Because this conditional expression is actually made up of two smaller
conditional expressions, an extra set of parentheses surrounds it.*/
// now lets try &&
if (($degrees > 100) && ($hot == "yes")) {
echo "<P>TEST 2: It's <strong>really</strong> hot!</P>";
} else {
echo "<P> TEST 2: It's bearable.</P>";
}
?>
</BODY>
</HTML>


save as logiclScript.php

--------------------------------------------------------------------------------------------------------
Back to variables
What is an array?

An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary, collection, stack, queue, and probably more. As array values can be other arrays, trees and multidimensional arrays are also possible.


