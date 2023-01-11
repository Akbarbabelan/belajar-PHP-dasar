<?php

$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Akbar");
$sayHello("Babelan");

function sayGoodBye(string $name, $filter){
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL; 
}

sayGoodBye("Akbar", function (string $name): string{
    return strtoupper($name);
});

$filterFunstion = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Akbar", $filterFunstion);



$firstName = "Akbar";
$lastName = "Babelan";

$sayGoodBye = function () use ($firstName, $lastName) {
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayGoodBye();