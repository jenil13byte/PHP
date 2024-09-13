<!DOCTYPE html>
<html>

<head>
  <title> task 4 Q2 </title>
</head>

<body>

  <?php // sort , search , sum , merge 

  if (isset($_POST["btnsubmit"])) {
    $Option = $_POST["Option"];
    echo "You selected: " . $Option;

    if ($Option == "option1") {

      $my_array1 = array("ram", "sam", "ken", "dan");
      echo "before .";
      print_r($my_array1);
      sort($my_array1);
      echo "<br>after .";
      print_r($my_array1);
      $my_array2 = array(44, 55, 21, 77, 15, 45, 67, 88);
      echo "<br>before .";
      print_r($my_array2);
      sort($my_array2);
      echo "<br>after .";
      print_r($my_array2);
    } else if ($Option == "option2") {
      echo "<br><br><br>";
      $my_array = array("ram", "ritu", "sam", "dan");
      echo array_search("sam", $my_array);
      echo "<br>";
      echo array_search("yash", $my_array);
    } else if ($Option == "option3") {
      echo "<br><br><br>";
      $numbers = [1, 2, 74, 88, 5];
      $sum = array_sum($numbers);
      echo "The sum of the numbers is: " . $sum;
    } else if ($Option == "option4") {
      echo "<br><br><br>";
      $my_array1 = array("PHP", "VB");
      $my_array2 = array("Shyam", "Ram", "Vedika");

      $my_array3 = array_merge($my_array1, $my_array2);

      echo "myarray1.";

      print_r($my_array1);

      echo "<br>myarray2. ";

      print_r($my_array2);

      echo "<br>myarray3. ";

      print_r($my_array3);
    }
  }
  ?>
</body>
<form method="post">
  <label for="Option">Choose an option:</label>
  <select name="Option" id="Option">
    <option value="option1">Option 1</option>
    <option value="option2">Option 2</option>
    <option value="option3">Option 3</option>
    <option value="option4">Option 4</option>
  </select>
  <br>
  <input type="submit" name="btnsubmit" value="display">
</form>
</body>

</html>