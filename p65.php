<?php //  sort , search , sum , merge //

$my_array1 = array("ram","sam","ken","dan");
echo "before .";
print_r($my_array1);
sort($my_array1);
echo "<br>after .";
print_r($my_array1);

$my_array2 =array(44,55,21,77,15,45,67,88);

echo "<br>before .";
print_r($my_array2);
sort($my_array2);
echo "<br>after .";
print_r($my_array2);
?>
<?php
echo "<br><br><br>";
$my_array = array("ram","ritu","sam","dan");
echo array_search("sam",$my_array);
echo "<br>";
echo array_search("yash",$my_array);//0
?>
<?php
echo "<br><br><br>";
function arraySum($array) {
  $sum = 0;
  foreach ($array as $value) {
    $sum += $value;
  }
  return $sum;
}
$numbers = array(1, 2, 3, 4, 5);
echo "Sum of the array: " . arraySum($numbers);
?>
<?php
echo "<br><br><br>";
$my_array1 = array("php","dsa");
$my_array2 = array("c","c++","oss","mm");

$my_array3 = array_merge($my_array1,$my_array2);

echo "myarray1 .";
print_r($my_array1);
echo "myarray2 .";
print_r($my_array2);
echo "myarray3 .";
print_r($my_array3);
?>