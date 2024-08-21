<html> 

<body>
    <form method="post">
        <h2>menu driven program</h2>
        <h2>1.the square of the number</h2>
        <h2>2.the factorial of the number</h2>
        <h2>3.the squareroot of the number</h2>

        <br><br>
        Enter the number:-<input type="text" name="nm">
        <br><br>
        Enter your choice :- <input type="text" name="ch">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
</body>
<?php   // Q4 task1 
if (isset($_POST['submit'])) {
    $number = $_POST['nm'];
    $ch = $_POST['ch'];


    switch ($ch) {
        case 1:
            echo "The square of the number is " . ($number * $number) . "<br>";
            break;
        case 2:
            if ($number < 0) {
                echo "<br>Factorial is undefined for negative numbers.";
            } else {
                $factorial = 1;
                for ($i = 1; $i <= $number; $i++) {
                    $factorial *= $i;
                }
                echo "The factorial of $number is " . $factorial . "<br>";

            }
            break;
        case 3:
            echo "The square root of the number is " . sqrt($number) . "<br>";
            break;
        default:
            echo "<br>Invalid choice";
            break;
    }
}
?>

</html>