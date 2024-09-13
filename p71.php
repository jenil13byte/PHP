<?php
// task 4 Q8
$array = array(
    "a" => 10,
    "b" => 20,
    "c" => 5,
    "d" => 30,
    "e" => 15
);

$max_value = max($array);

$max_index = array_search($max_value, $array);

echo "The index of the highest value is: $max_index  $max_value";
?>