<?php

function foo(){
    echo "Foo" . PHP_EOL;
}

function bar(){
    echo "Bar" . PHP_EOL;
}


$functionYangAkanDipanggil = "Foo";
$functionYangAkanDipanggil();

$functionYangAkanDipanggil = "Bar";
$functionYangAkanDipanggil();

function sayHello(string $name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string {
    return "sample $name";
}
sayHello("Eko", "sampleFunction");
sayHello("Eko", "strtoupper");
sayHello("Eko", "strtolower");

