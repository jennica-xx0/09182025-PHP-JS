<?php

/* indexed array
$fruits = ["Apple", "Banana", "Cherry"];
echo $fruits[0] . '<br>'; 
$fruits[3] = 'peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';
*/

/* mixed type array
$mixedArray = [15, "Apple", true];
echo '<pre>';
var_dump($mixedArray);
echo '</pre>';
*/

// associative array
$user = [
    'name' => 'Zura',
    'age' => 32,
    'hobbies' => ['coding', 'tennis']
];

    echo $user['name'] . '<br>';
    echo '<pre>';
    var_dump($user);
    echo '</pre>';

?>