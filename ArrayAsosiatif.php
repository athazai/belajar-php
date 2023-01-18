<?php

// array asosiatif
$sekolah = [
    "id" => "1",
    "nama" => "IDN Boarding School",
    "address" => [
        "kota" => "Jakarta",
        "provinsi" => "DKI Jakarta"
    ]
];

// array dalam array
$sekolah = [
    "id" => 1,
    "nama" => "KBA",
    "address" => [
        "kota" => "Karawang",
        "provinsi" => "Jawa Barat"
    ]
];

// menampilkan seluruh arrray
var_dump($sekolah);

// menampilkan array sesuai index
var_dump($sekolah["nama"]);

?>