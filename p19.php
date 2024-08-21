<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box loop table  
    $Number1="";
    $table="";

if(isset($_POST["btnsubmit"])){

        $Number1=$_POST["txtno1"];
       
        for ($j =1;$j<=10;$j++){
            $ans=$j*$Number1;
            $table .= "$Number1  X  $j = $ans\n";
        }
    }
?>

<form method="post">
Number1: <input type="text" name="txtno1" value="<?php echo $Number1;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
table : <textarea name="txttable" rows="20" cols="20"> <?php echo $table;?></textarea>
</form>
</body>
</html>