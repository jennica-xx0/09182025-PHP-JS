<?php

// single line comment

$name = 'Zura';
$age = 32;
$isFather = true;
$money = 19.99;
$salary = null;

/*print variable
echo "Hello " . $name . "<br>";
echo "Your age is " . $age . "<br>";
echo $isFather . "<br>";
echo $money . "<br>";
echo $salary . "<br>";
*/

/*print types of the variables
echo gettype($name) . "<br>";
echo gettype($age) . "<br>";
echo gettype($isFather) . "<br>";
echo gettype($money) . "<br>";
echo gettype($salary) . "<br>";
*/

/*print the whole variable
//print_r - print the information about the arrays
// var_dump - print every information
print_r($name);
echo "<br>";
var_dump($name);
echo "<br>";
*/

/*change the value and print the type
$name = 32;
echo gettype($name);
echo "<br>";
*/

/*variable checking functions
var_dump(is_string($name));
echo "<br>";
var_dump(is_string($age));
echo "<br>";
var_dump(is_int($age));
echo "<br>";
var_dump(is_bool($isFather));
echo "<br>";
var_dump(is_double($money));
*/

//check if variable is defined
var_dump(isset($name));
echo "<br>";
var_dump(isset($letter));
echo "<br>";
?>