<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2 task1</title>
</head>
<body>
<?php // task1 collage Q2

$Age="";
$Eligiblity="";

if(isset($_POST["btnsubmit"])){

    $Age=$_POST["txtno1"];
    
    if($Age > 18)
    {
        $Eligiblity = " Yes you can vote ";
    }
    else{
        $Eligiblity = " No you cannot vote ";
    }
}
?>

<form method="post">
Age : <input type="text" name="txtno1" value="<?php echo $Age;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Submit"/> <br/>
Eligiblity : <input type="text" name="txtans" value="<?php echo $Eligiblity ; ?>"/>
</form>
</body>
</html> 