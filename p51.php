<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q6 task1</title>
</head>

<body>
    <?php  // Q6 task1
    $Fullname = "";
    $Email = "";
    $Username = "";
    $Password = "";
    $ConfirmPassword = "";

    if (isset($_POST["btnRegister"]))
        if (isset($_POST["btnReset"])) {
            $Fullname = $_POST["txtno1"];
            $Email = $_POST["txtno2"];
            $Username = $_POST["txtno3"];
            $Password = $_POST["txtno4"];
            $ConfirmPassword = $_POST["txtno5"];
        }
    ?>
    <form method="POST">
        <table border="1">
            <tr>
                <td>Fullname</td>
                <td><input type="text" name="txtno1" value="<?php echo $Fullname; ?>" /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="txtno2" value="<?php echo $Email; ?>" /> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input type="password" name="txtno3" value="<?php echo $Password; ?>" /> </td>
            </tr>
            <tr>
                <td>ConfirmPassword</td>
                <td><input type="password" name="txtno4" value="<?php echo $ConfirmPassword; ?>" /> </td>
            </tr>

            <td><input name="btnRegister" type="submit" value="Register" /> </td>
            <td><input name="btnReset" type="submit" value="Reset" /> </td>

        </table>
    </form>
</body>

</html>