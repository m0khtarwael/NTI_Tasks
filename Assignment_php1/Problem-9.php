<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

echo "Using for loop:<br>";

for ($i = 0; $i < count($tests); $i++) {
    if (!is_bool($tests[$i])) {
        echo $tests[$i] . "<br>";
    }
}

echo "<br>Using while loop:<br>";

$i = 0;

while ($i < count($tests)) {
    if (!is_bool($tests[$i])) {
        echo $tests[$i] . "<br>";
    }

    $i++;
}

?>