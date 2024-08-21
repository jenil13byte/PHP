<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php // Q8 task 4
    $x = array(
        'no1' => 288,
        'no2' => 155,
        'no3' => 841,
        'no4' => 4,
        'no5' => 753
    );
    $maxValue = max($x);

    $indexOfMaxValue = array_search($maxValue, $x);

    echo "Index of the highest value ($maxValue): $indexOfMaxValue";
    ?>
</body>

</html>