<?php

$values = array(1, 2, 3, 4, 5);
var_dump($values);

$names = ["IDN", "Boarding", "School"];
var_dump($names);

// menampilkan data array
var_dump($names[0]);

// mengubah data array
$names[0] = "SMK IDN";
var_dump($names);

// menghapus data array
unset($names[1]);
var_dump($names);

// menambahkan data array menggunakan array
$saya = ["Athallah", "Zaidan", "Ariq"];
$names[] = $saya;
var_dump($names);

?>
