<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box area of circle  
    $radius="";
    $areaofcircle="";
    
    if(isset($_POST["btnsubmit"])){

    $radius=$_POST["txtno1"];
    $areaofcircle= 3.14*$radius*$radius;
}
?>

<form method="post">
radius: <input type="text" name="txtno1" value="<?php echo $radius;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
area of circle  : <input type="text" name="txtareaofcircle" value="<?php echo $areaofcircle ; ?>"/>
</form>
</body>
</html>