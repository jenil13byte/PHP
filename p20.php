<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>    751984
<body>
<?php  // text box loop odd even  
$
    $Number="";
    $table1="";
    $table2="";
    
    if(isset($_POST["btnsubmit"])){

        $Number=$_POST["txtno1"];
       
        for ($j =1;$j<=$Number;$j++){

        
            if($j%2==0){
            $table1 .= "$j  is  even \n";
            }
            else {
             $table2 .= "$j  is  odd \n";
        }
    }
    }
?>

<form method="post">
Number: <input type="text" name="txtno1" value="<?php echo $Number;?>"/><br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
table1 : <textarea name="txttable1" rows="20" cols="20"> <?php echo $table1;?></textarea>
table2 : <textarea name="txttable2" rows="20" cols="20"> <?php echo $table2;?></textarea>
</form>
</body>
</html>