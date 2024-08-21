<?php // storing 2D array and print 
$families = 
array(
    "Shyam"=>array("Ritu","Vedika","Ram"),
    "Bharat"=>array("Vatsal","Poonam","Dipti")
);

echo $families['Shyam'][0]. $families['Shyam'][1]. $families['Shyam'][2]."<br>";

echo "<hr size='5' color='red'>";
print_r($families);
?>
