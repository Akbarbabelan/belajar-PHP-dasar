<?php

$name = "eko";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age = ";
echo $age;
echo "\n";

//apakah variabel tsb null atau tidak jika yakin

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

// cara menghapus variabel
$contoh = "eko";
unset($contoh);

//disarankan menggunakan isset tidak yakin kalau variabel nya ada pakai yang ini

$contoh = "Kurniawan";
$contoh = null;

var_dump(isset($contoh));