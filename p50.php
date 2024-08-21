<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q5 task1</title>
</head>

<body>


    <?php  // Q5 task1  
    $Username = "";
    $Email = "";
    $Password = "";
    $ConfirmPassword = "";

    if (isset($_POST["btnSignUp"])) {

        $Username = $_POST["txtno1"];
        $Email = $_POST["txtno2"];
        $Password = $_POST["txtno3"];
        $ConfirmPassword = $_POST["txtno4"];
    }
    ?>
    <form method="post">
        <h1>Registration</h1>
        <h4>This Email already exists.</h4>
        <table border="0">
            <tr>
                <td>Name</td>
                <td><input type="text" name="txtno1" value="<?php echo $Username; ?>" /></td>
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
            <tr>
                <td><input name="btnSignUp" type="submit" value="SignUp" /> </td>
            </tr>
        </table>
    </form>
</body>

</html>