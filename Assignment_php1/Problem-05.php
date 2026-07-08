<?php

$numbers = array(5, 2, 9, 1, 6);

function RouteBubble($arr) {
    $n = count($arr);

    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {

            if ($arr[$j] > $arr[$j + 1]) {
                // swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

$sortedArray = RouteBubble($numbers);

foreach ($sortedArray as $number) {
    echo $number . " ";
}

?>