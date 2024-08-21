<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q6 task2</title>
</head>

<body>
    <?php //Q6 task2     
    $Units = "";
    $Bill = "";

    if (isset($_POST["btnsubmit"])) {

        $Units = $_POST["txtno1"];
        if ($Units < 50) {
            $Bill = $Units * 3.50;
        } elseif ($Units < 100) {
            $Bill = $Units * 4.00;
        } elseif ($Units > 150 && $Units <= 250) {
            $Bill = $Units * 5.20;
        } elseif ($Units > 250) {
            $Bill = $Units * 6.50;
        } else {

        }
    }
    ?>
    <form method="post">
        Units : <input type="text" name="txtno1" value="<?php echo $Units; ?>" /> <br />
        <input name="btnsubmit" type="submit" value="Submit" /> <br />
        Bill : <input type="text" name="txtBill" value="<?php echo $Bill; ?>" />
</body>

</html>