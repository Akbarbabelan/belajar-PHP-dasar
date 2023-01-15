<?php

function sayHello(stringable $stringable): void
{
    echo "Heloo {$stringable->__toString()}" . PHP_EOL; 
}

class Person {

    public function __toString(): string
    {
        return "Person";
    }
}

sayHello(new Person);