<?php // demo of list function 

$college_array = array("LJ","XICA","HL","Nirma");

echo "\$ College_array<br>";

print_r($college_array);
echo "<br>";

echo "<br> list(\$a, \$b, \$c, \$d) = \$college_array<br>";

list($a, $b, $c, $d) = $college_array;

echo "college name,\$a = $a, \$b = $b, \$c = $c, \$d = $d = $d <br>";
echo "<br>list(\$x,\$y) = \$college_array<br>";

list($x,$y) = $college_array;

echo "college name, \$x = $x, \$y = $y<br>";
echo "<br>list(\$p,,\$r) = \$college_array<br>";

list($p, ,$r) = $college_array;

echo "college name, \ $p = $p, \$r = $r";

?>