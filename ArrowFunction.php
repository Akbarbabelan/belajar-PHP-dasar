<?php

$firstName = "Akbar";
$lastName = "Babelan";

$anonymusFunction = function () use ($firstName, $lastName): string {
    return "Hello $firstName $lastName" . PHP_EOL;
};

$arrowFunction = fn() => "Hello $firstName $lastName" . PHP_EOL;

echo $anonymusFunction();
echo $arrowFunction();