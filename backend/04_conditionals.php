<?php

// if-else + comparison operators
// ==  - check the value of two number
// === - check the types
// != or <>
// !==
// <
// <=
// >
// >=

/*$age = 10;

if ($age <=12){
    echo "too young to watch harry";
}else if ($age < 15){
    echo "you may watch harry";
}else{
    echo "you should watch harry";
}
*/


// logical operators
// && - and
// || - or
// ! - not
$age =15;
$watched = true;

if($age >= 15 && !$watched){ 
    echo 'you just watch harry';
}

if($age >= 15 || !$watched){ 
    echo 'you should watch harry';
}

//switch
$day = 3;

switch ($day){
    case 1: 
        echo "monday";
        break;
    case 2: 
        echo "monday";
        break;
    }
?>