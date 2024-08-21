<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box loop 1 to 5  
    $Number="";
    $Loopis="";

if(isset($_POST["btnsubmit"])){

        $Number=$_POST["txtno1"];

        for ($j = 1; $j <= $Number; $j++) {
            $Loopis .= $j;
        }
    }
?>

<form method="post">
Number: <input type="text" name="txtno1" value="<?php echo $Number;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
Loop is : <input type="text" name="txtLoopis" value="<?php echo $Loopis;?>"/>
</form>
</body>
</html>