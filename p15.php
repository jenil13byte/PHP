<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  // text box max between 2   
    $Number1="";
    $Number2= "";
    $themaximumnumber="";
    

if(isset($_POST["btnsubmit"])){

        $Number1=$_POST["txtno1"];
        $Number2=$_POST["txtno2"];

        if($Number1 > $Number2){
            $themaximumnumber="Number 1 is greater";
        }
        else{
            $themaximumnumber="Number 2 is greater";
        }
    }
?>

<form method="post">
Number1: <input type="text" name="txtno1" value="<?php echo $Number1;?>" /> <br/>
Number2: <input type="text" name="txtno2" value="<?php echo $Number2;?>" /> <br/>
<input name="btnsubmit" type="submit" value="Click me"/> <br/>
the maximum number : <input type="text" name="txtthemaximumnumber" value="<?php echo $themaximumnumber ; ?>"/>
</form>
</body>
</html>