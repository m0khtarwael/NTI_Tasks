<?php

$films = array("Fast", "Predestination", "Persuit", "Prestige"); 
$keyword = "avatar";

foreach ($films as $film) {
    if ($film == $keyword) {
        echo "Yes";
        break;
    } else {
        if ($film == end($films)) {
            echo "No";
        }
    }
}

?>