<?php // demo of each function 

$city_array=array("Gondal", "Mumbai","Ahmedabad", "Jamnagar");

echo "\$City_array<br>";

print_r($city_array);

// Avoid using each() here

echo "<br><hr color='red'>";

$college_array = array("LJ", "XICA", "HL","Nirma");

echo "\$College_array<br>";
print_r($college_array);

foreach ($college_array as $key => $val) {
    echo "$key => $val<br />";
}
?>