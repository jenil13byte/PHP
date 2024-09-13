<?php
// task 4 Q4

$code = array(" Atomic Habits " => "01" , " Wings on Fire " => " 02 " , " Secret Wars " => " 03 ");

$code[' Dooms Day '] = " 04 ";

$code[' Man behind the atomic '] = " 05 ";

echo " Library " .  " <br> ";

echo "<hr color='red' size='5'>";

foreach ($code as $key_name => $key_value) {

    print " BookName = " . $key_name . " BookNo = " . $key_value . " <BR> ";
}
