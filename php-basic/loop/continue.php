<?php
$i = 0;
while ($i <= 10) {
    if ($i % 2 == 0) {
        $i++;
        continue;
    }
    $i++;
    echo "i = $i <br>";
}
