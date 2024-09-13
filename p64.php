<?php
// task 4 Q1 
function Matrices($matrix1, $matrix2)
{
    $result = array();

    // Loop through each row
    for ($i = 0; $i < 3; $i++) {
        // Loop through each column
        for ($j = 0; $j < 3; $j++) {
            // Add corresponding elements
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }

    return $result;
}

// Example Matrices
$matrix1 = array(
    array(12, 29, 3),
    array(4, 53, 65),
    array(73, 8, 9)
);

$matrix2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 55, 41)
);

// Add the matrices
$sum = Matrices($matrix1, $matrix2);

// Print the result
echo "Sum of the two matrices is:\n";
for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {
        echo $sum[$i][$j] . " ";
    }
    echo "\n";
}
?>