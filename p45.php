<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1 task1</title>
</head>
<body>

<?php // task1 Q1  

$ch="";
$ans="";

if(isset($_POST["btnsubmit"])){

    $ch=$_POST["txtno1"];
    
    if($ch=="a" || $ch=="e" || $ch=="i" || $ch=="o" || $ch=="u" or $ch=="A" || $ch=="E" || $ch=="I" || $ch=="O" || $ch=="U")
    {
        $ans = "vowels";
    }
    else{
        $ans = "constant";
    }
}
?>

<form method="post">
ch : <input type="text" name="txtno1" value="<?php echo $ch;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Submit"/> <br/>
Ans : <input type="text" name="txtans" value="<?php echo $ans ; ?>"/>
</form>
</body>
</html> 