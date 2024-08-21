<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4 task2</title>
</head>

<body>
    <?php // Q4 task2 
    
    $no = "";
    $ans = "";

    if (isset($_POST["btnsubmit"])) {

        $no = $_POST["txtno1"];
        $f = 1;
        for ($i = 1; $i <= $no; $i++) {
            $f = $f * $i;
        }
        $ans = $f;
    }

    ?>
    <form method="post">
        no : <input type="text" name="txtno1" value="<?php echo $no; ?>" /> <br />
        <input name="btnsubmit" type="submit" value="Click me" /> <br />
        ans : <input type="text" name="txtans" value="<?php echo $ans; ?>" />
</body>

</html>