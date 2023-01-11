<?php

$first = [
    "first_name" => "Akbar"
];

$last = [
    "first_name" => "Budi",
    "last_name" => "Babelan"
];

$full = $first + $last;
var_dump($full);

$a = [
    "first_name" => "Akbar",
    "last_name" => "Babelan"
];

$b = [
   "last_name" => "Babelan",
   "first_name" => "Akbar"
];

var_dump($a == $b);
var_dump($a === $b);
