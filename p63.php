<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Q5 task3 </title>
</head>

<body>
    <h2> Employee </h2>
    <?php   // Q5 task 3
    if (isset($_POST['btn'])) {
        $empname = $_POST['empname'];
        $empsalary = $_POST['empsalary'];
        $empposition = $_POST['empposition'];
        $netsalary = $_POST['empsalary'];


        class Employee
        {
            public $empname;
            public $empsalary;
            public $empposition;
            public $netsalary;

            
            public $hra;
            public $da;

            public function __construct($empname, $empsalary, $empposition)
            {
                $this->empname = $empname;
                $this->empsalary = $empsalary;
                $this->empposition = $empposition;

                $this->hra=0;
                $this->da=0;
            }

            public function empname()
            {
                echo "<br> empname = " . $this->empname;
            }
            
            public function empposition()
            {
                echo "<br>empposition = ". $this->empposition;
            }
            public function empsalary()
            {
                echo "<br> empsalary = " . $this->empsalary;
            }

            public function netsalary()
                
            {
                $hra=0.2;
                $da=0.1;
                $this->hra =$this->empsalary * $hra;
                $this->da =$this->empsalary * $da;

                $this->netsalary =$this->empsalary + $this->hra + $this->da;
                
                echo "<br> netsalary = " . $this->netsalary;   
                echo "<br> hra = " . $this->hra;   
                echo "<br> da = " . $this->da;   
                }
        }

        $Employee = new Employee($empname, $empsalary, $empposition);
        $Employee->empname();
        $Employee->empsalary();
        $Employee->empposition();   
        $Employee->netsalary();
       
    }
    ?>
    <form method="post">
        <br><br>
        empname: <input type="text" name="empname">
        <br><br>
        empsalary: <input type="number" name="empsalary">
        <br><br>
        empposition: <input type="number" name="empposition">
        <br><br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>