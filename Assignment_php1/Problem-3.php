<?php

$numbers = array(10, 20, 30, 40, 50);

function getSum($numbers) {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

echo "Sum: " . getSum($numbers);

?>