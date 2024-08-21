<?php // associative array
echo "\$a<br>";
$a=array("Rutvij"=>45,"Harshal"=>22,"Nisarg"=>33,"Shrey"=>44, "Shubham"=>55);
print_r($a);
echo "<br>";
echo "Count = ".count($a)."<br>";
echo "Current = ".current($a)."<br>";
echo "Next = ".next($a)."<br>";
echo "End = ".end($a)."<br>";
echo "Previous = ".prev($a)."<br>";
echo "<hr color='red'>";
echo "In_array(33,\$a)=".In_array(33,$a)."<br>";
echo "<hr color='red'>";
$b=array_reverse($a);
echo "After Reverse \$b value <br>";
print_r($b);
echo "<hr color='red'>";
$ar1=array("Shimoli"=>11,"Payal"=>22,"Zalak"=>23); $ar2=array("Maharshi"=>100,"Manan"=>200);
$ar3=array_merge($ar1,$ar2);
echo "<br>\$ar1=";
print_r($ar1);
echo "<br>\$ar2=";
print_r($ar2);
echo "<br>\$ar3=array_merge(\$ar1,\$ar2)";
echo "<br>\$ar3=";
print_r($ar3);
?>