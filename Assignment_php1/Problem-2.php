<?php
function calculate($num1, $num2) {
    $sum = $num1 + $num2;
    $difference = $num1 - $num2;

    echo "Sum: " . $sum . "<br>";
    echo "Difference: " . $difference;
}

calculate(10, 5);
?>