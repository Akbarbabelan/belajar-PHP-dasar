<?php

goto a;
echo "Hello WOrld" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

$counter = 1;

while (true) {
    echo "ini perulangan ke-$counter" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "loop end" . PHP_EOL;