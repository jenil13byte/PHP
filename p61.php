<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Q3 task3 </title>
</head>

<body>
    <h2> bank account </h2>
    <?php   // Q3 task 3
    if (isset($_POST['btn'])) {
        $accno = $_POST['accno'];
        $accbalance = $_POST['accbalance'];


        class bankaccount
        {
            public $accno;
            public $accbalance;
            public $dep;
            public $wit;

            public function __construct($accno, $accbalance)
            {
                $this->accno = $accno;
                $this->accbalance = $accbalance;
            }

            public function dep()
            {
                $dep = $this->accbalance + $this->dep;
                echo "dep = $dep<br>";
            }

            public function wit()
            {
                $wit = $this->accbalance - $this->wit;
                echo "wit = $wit<br>";
            }
        }

        $bankaccount = new bankaccount($accno, $accbalance);
        $bankaccount->dep();
        $bankaccount->wit();
    }
    ?>
    <form method="post">
        accno: <input type="number" name="accno">
        <br><br>
        accbalance: <input type="number" name="accbalance">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>