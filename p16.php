<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  // text box subject & grades  
    $pythn="";
    $javva= "";
    $oop="";
    $total="";
    $grade="";
    
    if(isset($_POST["btnsubmit"])){
        
    $pythn=$_POST["txtno1"];
    $javva=$_POST["txtno2"];
    $oop=$_POST["txtno3"];
    $total=$pythn+$javva+$oop;
    $grade=$_POST;

    if($total>=0 && $total<50)
	{
		$grade=" D grade ";
	}
	else if($total>=50 && $total<80)
	{
		$grade=" C grade ";
	}
	else if($total>=80 && $total<120)
	{
		$grade=" B grade ";
	}
	else if($total>=120 && $total<150)
	{
		$grade=" A grade ";
	}
    else if($total>=150 &&
    
    
    
    $total)
    {
        $grade=" A+ grade ";
    }
    else
    {
        $grade="error";
    }
}
?>

<form method="post">
pythn : <input type="text" name="txtno1" value="<?php echo $pythn;?>" /> <br/>
javva : <input type="text" name="txtno2" value="<?php echo $javva;?>"/> <br/>
oop : <input type="text" name="txtno3" value="<?php echo $oop;?>"/> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
total : <input type="text" name="txttotal" value="<?php echo $total ; ?>"/><br/> 
grade : <input type="text" name="txtgrade" value="<?php echo $grade ; ?>"/>
</form>
</body>
</html>