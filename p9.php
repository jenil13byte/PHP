<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php // text box addition 

$no1="";
$no2= "";
$ans="";

if(isset($_POST["btnsubmit"])){

    $no1=$_POST["txtno1"];
    $no2=$_POST["txtno2"];
    $ans=$no1+$no2;
}
?>

<form method="post">
No1 : <input type="text" name="txtno1" value="<?php echo $no1;?>" /> <br/>
No2 : <input type="text" name="txtno2" value="<?php echo $no2;?>"/> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
Ans : <input type="text" name="txtans" value="<?php echo $ans ; ?>"/>
</form>
</body>
</html>