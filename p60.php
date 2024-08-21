<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2 task3</title>
</head>

<body>
    <h2> the vehicle details </h2>
    <?php   //Q2 task3

    $B = "";
    $M = "";
    $Y = "";

    if (isset($_POST['btn'])) {
        $B = $_POST["Brand"];
        $M = $_POST["Model"];
        $Y = $_POST["Year"];



        class vehicle
        {
            public $Brand;
            public $Model;
            public $Year;

            public function __construct($B, $M, $Y)
            {
                $this->Brand = $B;
                $this->Model = $M;
                $this->Year = $Y;
            }

            public function Brand()
            {
                echo "<br> Brand = " . $this->Brand;
            }

            public function Model()
            {
                echo "<br> Model = " . $this->Model;
            }
            public function Year()
            {
                echo "<br> Year = " . $this->Year;
            }
        }
        $vehi = new vehicle($B, $M, $Y);
        $vehi->Brand();
        $vehi->Model();
        $vehi->Year();
    }

    ?>
    <form method="POST">
        Brand : <input type="text" name="Brand">
        <br><br>
        Model : <input type="text" name="Model">
        <br><br>
        Year : <input type="number" name="Year">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>


</body>

</html>