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
        $deposit = $_POST['deposit'];
        $withdraw = $_POST['withdraw'];


        class bankaccount
        {
            public $accno;
            public $accbalance;
            public $deposit;
            public $withdraw;

            public function __construct($accno, $accbalance, $deposit, $withdraw)
            {
                $this->accno = $accno;
                $this->accbalance = $accbalance;
                $this->deposit = $deposit;
                $this->withdraw = $withdraw;
            }

            public function accno()
            {
                echo "<br> accno = " . $this->accno;
            }
            
            public function deposit()
            {
                $deposit = $this->deposit ;
                $this->accbalance =$this->accbalance+$deposit;
                echo "<br>deposit = $deposit";
            }
            public function accbalance()
            {
                echo "<br> accbalance = " . $this->accbalance;
            }

            public function withdraw()
            {
                $withdraw = $this->withdraw;
                $this->accbalance =$this->accbalance-$withdraw;
                echo "<br>withdraw = $withdraw";
            }
        }

        $bankaccount = new bankaccount($accno, $accbalance, $deposit, $withdraw);
        $bankaccount->accno();
        $bankaccount->accbalance();
        $bankaccount->deposit();
        $bankaccount->accbalance();
       
        $bankaccount->withdraw();
        $bankaccount->accbalance();
       
    }
    ?>
    <form method="post">
        <br><br>
        accno: <input type="number" name="accno">
        <br><br>
        accbalance: <input type="number" name="accbalance">
        <br><br>
        deposit: <input type="number" name="deposit">
        <br> <br>
        withdraw: <input type="number" name="withdraw">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>