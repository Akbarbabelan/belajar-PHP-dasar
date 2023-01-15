<?php

function validate(string $value)
{

    if (trim($value) == "") {
        throw new Exception("Invalid string");
    }
}

try{
    Validate("  ");
}catch (Exception){
    echo "yuhuuu" . PHP_EOL;

}