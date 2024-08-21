<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Q1 task3 </title>
</head>

<body>
    <h2>Area and Perimeter of Rectangle</h2>
    <?php   // Q1 task 3
    if (isset($_POST['btn'])) {
        $a = $_POST['length'];
        $b = $_POST['width'];

        class Rectangle
        {
            public $length;
            public $width;

            public function __construct($a, $b)
            {
                $this->length = $a;
                $this->width = $b;
            }


            public function area()
            {
                $ar = $this->length * $this->width;
                echo "Area = $ar<br>";
            }

            public function perimeter()
            {
                $perimeter = 2 * ($this->length + $this->width);
                echo "Perimeter = $perimeter<br>";
            }
        }

        $rect = new Rectangle($a, $b);
        $rect->area();
        $rect->perimeter();
    }
    ?>
    <form method="post">
        Length: <input type="number" name="length">
        <br><br>
        Width: <input type="number" name="width">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>