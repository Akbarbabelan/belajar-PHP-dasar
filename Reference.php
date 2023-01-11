<?php
//assign

$name = "Akbar";

$otherName = &$name;

$otherName = "MAK E";

echo $name . PHP_EOL;

//

function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

//returning references

function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
