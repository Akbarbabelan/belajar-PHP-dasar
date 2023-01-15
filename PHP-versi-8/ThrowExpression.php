<?php

function sayHello(?string $name){
    if($name == null) {
        throw new Exception("tidak boleh null");
    }
    echo "Hello $name" . PHP_EOL;
}

function sayHelloExpression(?string $name){
    
    $result = $name != null ? "Hello $name" : throw new Exception("tidak boleh null");
    echo $result . PHP_EOL;
}

sayHelloExpression("Eko");
sayHelloExpression(null);
