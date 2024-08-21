<?php // storing value in  array and print 
$Code=array("Ahmedabad"=>"079","Surat"=>"0261","Rajkot"=>"0281");

$Code['junagadh']="0285";
$Code['jamanagar']="0255";

echo "Code no of " . $Code["Ahmedabad"]."<br>";

echo "<hr color='red' size='5'>";

foreach ($Code as $key_name => $key_value) {
    print"cityname = ". $key_name. "codeno = ". $key_value."<BR>";
}
?>
