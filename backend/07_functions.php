<?php

/*simple function
function sayHello(){
    echo "hello world";
}
sayHello(); // output
*/

/* with parameter
function greet($name){
    echo "hello, $name";
}
greet("alice"); */

/*parameter default value
function greet($name = 'Guest'){
    echo "Hello, $name";
}
greet();
echo "<br>";
greet("alice"); */

//return from function
function multiply($a, $b){
    return $a * $b;
}
$result = multiply (4, 2); 
echo $result;


?> 