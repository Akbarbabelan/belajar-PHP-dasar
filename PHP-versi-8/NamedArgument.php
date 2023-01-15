<?php

function sayHello(string $first, string $middle, string $last): void
{
    echo "Hello $first $middle $last" . PHP_EOL;
}

sayHello("Akbar", "Babelan", "Musthofa");
// sayHello("Akbar", "Musthofa"); // error

sayHello(last: "Musthofa", first: "Akbar", middle: "Babelan");
