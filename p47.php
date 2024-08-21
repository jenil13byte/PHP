<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3 task1</title>
</head>
<body>
<?php // task1 collage Q3

$x="";
$y=0;

// Count the number of characters in the string

if(isset ($_POST["btnsubmit"])){

    $x=strval($_POST["txtno1"]);
    $y = strlen($x);

}
?>
<form method="post">
x: <input type="text" name="txtno1" value="<?php echo $x;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Submit"/> <br/>
y: <input type="text" name="txtans" value="<?php echo $y; ?>"/>
</form>
</body>
</html>