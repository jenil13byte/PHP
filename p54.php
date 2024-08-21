<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3 task2</title>
</head>

<body>
    <?php // Q3 task2 
    
    $no1 = "";
    $no2 = "";
    $ans = "";

    if (isset($_POST["btnsubmit"])) {

        $no1 = $_POST["txtno1"];
        $no2 = $_POST["txtno2"];
        $add = $no1 + $no2;
        if ($no1 == $no2) {
            $ans = $add * 3;
        } else {
            $ans = $add;
        }

    }
    ?>
    <form method="post">
        no1 : <input type="text" name="txtno1" value="<?php echo $no1; ?>" /> <br />
        no2 : <input type="text" name="txtno2" value="<?php echo $no2; ?>" /> <br />
        <input name="btnsubmit" type="submit" value="Click me" /> <br />
        ans : <input type="text" name="txtans" value="<?php echo $ans; ?>" />
</body>

</html>