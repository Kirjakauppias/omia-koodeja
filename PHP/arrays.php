<?php

//ARRAYS
array();                                //function is used to create an array.
$cars = array("Volvo", "BMW", "Toyota");

count();                                //function is used to return the length (the number of elements) of an array.

$cars = array("Volvo", "BMW", "Toyota");//Loop Through an Indexed Array.
$arrlength = count($cars);
for($x = 0; $x < $arrlength; $x++) {   
    echo $cars[$x];
    echo "<br>";
}

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Associative arrays are arrays that use named keys that you assign to them.
echo "Peter is " . $age['Peter'] . " years old.";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Loop Through an Associative Array.
foreach($age as $x => $x_value) {     
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

$cars = array (                         //Two-dimensional Arrays.
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}

sort();                                 //sort arrays in ascending order.
rsort();                                //sort arrays in descending order.
asort();                                //sort associative arrays in ascending order, according to the value.
ksort();                                //sort associative arrays in ascending order, according to the key.
arsort();                               //sort associative arrays in descending order, according to the value.
krsort();                               //sort associative arrays in descending order, according to the key.

$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);