<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box area of triangle  
    $height="";
    $base= "";
    $areaoftraingle="";
    
    if(isset($_POST["btnsubmit"])){

    $height=$_POST["txtno1"];
    $base=$_POST["txtno2"];
    $areaoftraingle=0.5*$height*$base;
}
?>

<form method="post">
height: <input type="text" name="txtno1" value="<?php echo $height;?>" /> <br/>
base : <input type="text" name="txtno2" value="<?php echo $base;?>"/> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
area of traingle  : <input type="text" name="txtareaoftraingle" value="<?php echo $areaoftraingle ; ?>"/>
</form>
</body>
</html>