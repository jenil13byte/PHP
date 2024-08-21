<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box odd even  
    $Number="";
    $thenumberis="";

if(isset($_POST["btnsubmit"])){

        $Number=$_POST["txtno1"];

        if($Number%2==0){
            $thenumberis="Even";
        }
        else{
            $thenumberis= "Odd";
        }
    }
?>

<form method="post">
Number: <input type="text" name="txtno1" value="<?php echo $Number;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
the number is : <input type="text" name="txtthenumberis" value="<?php echo $thenumberis ; ?>"/>
</form>
</body>
</html>

