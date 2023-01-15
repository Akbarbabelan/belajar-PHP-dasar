<?php

class Example{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "Akbar";
$example->data = 100;
$example->data = true;
$example->data = [];

function sampleFunction(string|array $data): void
{
    if (is_array($data)) {
        echo "Array" . PHP_EOL;
    } else if (is_string($data)) {
        echo "string" . PHP_EOL;
    }
}

var_dump(sampleFunction("Akbar"));
var_dump(sampleFunction([]));