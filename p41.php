<?php // vector array
$a = array(11,22,33,44,55);
print_r($a);
echo "\$a<br>";
echo "count = ".count($a)."<br>";
echo "current = ".current($a)."<br>";
echo "next = ".next($a)."<br>"; 
echo "end = ".end($a)."<br>"; 
echo "previous = ".prev($a)."<br>"; 
echo "<hr color = 'red'>";
echo "in_array(33,\$a)=".in_array(33,$a)."<br>";
echo "<hr color='red'>";
$b=array_reverse($a);
echo "After Reverse \$b value <br>";
print_r($b);
echo "<hr color='red'>";
$ar1=array(21,22,23);
$ar2=array(100,200);
$ar3=array_merge($ar1,$ar2);
echo "<br>\$ar1=";
print_r($ar1);
echo "<br>\$ar2=";
print_r($ar2);
echo "<br>\$ar3=array_merge(\$ar1,\$ar2)";
echo "<br>\$ar3=";
print_r($ar3);
?>