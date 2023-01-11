<?php

$counter = 1;

while (true) {
    echo "ini perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}