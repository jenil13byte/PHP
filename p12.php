<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box area of rectangle  
    $length="";
    $width= "";
    $areaofrectangle="";
    
    if(isset($_POST["btnsubmit"])){

    $length=$_POST["txtno1"];
    $width=$_POST["txtno2"];
    $areaofrectangle= $length*$width;
}
?>

<form method="post">
length: <input type="text" name="txtno1" value="<?php echo $length;?>" /> <br/>
width : <input type="text" name="txtno2" value="<?php echo $width;?>"/> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
area of rectangle  : <input type="text" name="txtareaofrectangle" value="<?php echo $areaofrectangle ; ?>"/>
</form>
</body>
</html>