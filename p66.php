<?php
// task 4 Q3

$code = array(" De Dana Dan " => " 9/10 " , " Hungama " => " 8/10 " , " Dhamaal " => " 8/10 ");

$code[' Phir Hera Pheri '] = " 10/10 ";

$code[' Golmaal '] = " 9/10 ";

echo " Ratings of Movie " .  " <br> ";

echo "<hr color='red' size='5'>";

foreach ($code as $key_name => $key_value) {

    print " MovieName = " . $key_name . " Rating = " . $key_value . " <BR> ";
}
?>