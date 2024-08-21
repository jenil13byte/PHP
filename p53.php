<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2 task2</title>
</head>

<body>

    <?php // Q2 task2 
    
    $no1 = "";
    $no2 = "";
    $no3 = "";
    $greaternum = "";

    if (isset($_POST["btnsubmit"])) {

        $no1 = $_POST["txtno1"];
        $no2 = $_POST["txtno2"];
        $no3 = $_POST["txtno3"];
        $greaternum = ($no1 >= $no2 && $no1 >= $no3) ? $no1 : (($no2 >= $no1 && $no2 >= $no3) ? $no2 : $no3);
    }
    ?>
    <form method="post">
        No1 : <input type="text" name="txtno1" value="<?php echo $no1; ?>" /> <br />
        No2 : <input type="text" name="txtno2" value="<?php echo $no2; ?>" /> <br />
        No3 : <input type="text" name="txtno3" value="<?php echo $no3; ?>" /> <br />
        <input name="btnsubmit" type="submit" value="Click me" /> <br />
        greaternum : <input type="text" name="txtgreaternum" value="<?php echo $greaternum; ?>" />
    </form>
</body>

</html>