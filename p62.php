<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Q4 task3 </title>
</head>

<body>
    <h2> Math </h2>
    <?php   // Q4 task 3
    if (isset($_POST['btn'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        class Math
        {
            public $num1;
            public $num2;
            public function __construct($num1, $num2)
            {
                $this->num1 = $num1;
                $this->num2 = $num2;
            }

            public function add()
            {
                $add = $this->num1 + $this->num2;
                echo "addition = $add<br>";
            }

            public function sub()
            {
                $sub = $this->num1 - $this->num2;
                echo "subtraction = $sub<br>";
            }
            public function multi()
            {
                $multi = $this->num1 * $this->num2;
                echo "multiplication = $multi<br>";
            }
            public function div()
            {
                $div = $this->num1 / $this->num2;
                echo "division = $div<br>";
            }
        }

        $Math = new Math ($num1, $num2);
        $Math->add();
        $Math->sub();
        $Math->multi();
        $Math->div();
    }
    ?>
    <form method="post">
        num1: <input type="number" name="num1">
        <br><br>
        num2: <input type="number" name="num2">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>