<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["kholifah", "akbar", "babelan"];
var_dump($names);

//mencari index ke berapa
var_dump($names[0]);

//mengubah data
$names[0] = "budi";
var_dump($names);

//menghapus data
unset($names[1]);
var_dump($names);

//menambah data
$names[] = "Joko";
var_dump($names);

//menghitung data array
var_dump(count($names));

//map menggunakan array

$akbar = array(
    "id" => "Akbar",
    "name" => "babelan musthofa",
    "age" => 22,
    "address" => array(
        "city" => "Jakarta",
        "country" => "Indonesia"
    )
);
var_dump($akbar);
var_dump($akbar["address"]["country"]);

var_dump($akbar["name"]);