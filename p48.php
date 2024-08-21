

           
           
           // invalid code //





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <tle>Q4 task1 </tle>
</head>

<body>

    <php // 
    
    $x = "";
    $y = "";
    $ans = "";

    if (isset($_POST["btnsubmit"])) {

        $no = $_POST["txtno"];

        $ch = $_POST["txtchoice"];

        if ($ch == 1) {
            $ans = $no * $no;
        } else if ($ch == 2) {
            $f = 1;
            for ($i = 1; $i <= $no; $i++) {
                $f = $f * $i;
            }
            $ans = $f;
        } else if ($ch == 3) {
            $ans = sqrt($no);
        }
    }
    ?>

    <form method="post">
        x: <input type="text" name="txtno" value="<?php echo $no; ?>" /> <br />
        y: <input type="text" name="txtchoice" value="<?php echo $ch; ?>" /> <br />
        <input name="btnsubmit" typlue="Submit" /> <br />
        Ans: <input type="text" name="txtans" value="<?php echo $ans; ?>" />
    </form>
</body>

</html>