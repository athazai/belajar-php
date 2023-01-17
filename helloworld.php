<?php

// echo"helloWorld";
// echo"\n";
// echo"helloWorld";
// echo"\n";


// echo "age :";
// var_dump(10000000);


// echo <<<contoh

// sdbfhsdbfhsbdfbdshfbdsfsbdhfsdhfbdsf
// sdfjasfbahsdbabdsasjdasdjasdnajdsnajsdasan
// sdasdjasdjabdjabjsdkakjsbdjnasdjkansd

// contoh;

// echo "\n";

// $alamat = "IKANC BAKAR";

// echo "KARAWANG $alamat"


// batas

// echo "Is Name Null? : ";
// var_dump(is_null($name));
// echo "\n";
// $contoh = "Aca";
// unset($contoh);
 
// $contoh = "Meisyel";
// $contoh = null;
 
// var_dump(isset($contoh));

// batas


// array
$values = array(10, 9, 8, 7.5);
var_dump($values);
 
$names = ["IDN", "Boarding", "School"];
var_dump($names);


var_dump($names[0] = 17);

$names[] = 11;
var_dump($names);

echo count($names);


$data_diri = array(
    "id" => "1",
    "nama" => "Atha",
    "umur" => "20",
    "alamat" => array(
        "jalan" => "Jl. Purabaya VI",
        "kota" => "Karawang"
    )
    );

    var_dump($data_diri["alamat"]["kota"]);


?>