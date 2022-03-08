<?php 

// variable scope / variable lingkup

// $x = 10;

// function tampilx(){
//         global $x;
//     echo $x ;

// }


// tampilx();

// variable super global adaalah variable yang sudah di miliki oleh php
//  $_GET
//  $_POST
//  $_REQUEST
//  $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// SUPERGLOBAL ADALAH VARIABLE MILIK PHP
// MERUPKAN ARRA ASSOSIATIVE
 


$tanaman = [
    ["Kode"=>  "TN-0001",
                "Nama"=> "Airis",
                    "Tinggi"=> "40cm",
                       "Suhumin"=> "27cc",
                            "Suhumax"=> "27cc",
                       "lingkungan"=> "Sejuk",
                "Phtanah"=> "7",
       "Jenistanah"=> "Humus",
       "Gambar"=> "airis.jpg"
    ],
       ["Kode"=> "TN-0002",
               "Nama"=> " Anggave",
                   "Tinggi"=> " 40cm ",
                       "Suhumin"=> "29cc",
                   "Suhumax"=> "30cc",
               "lingkungan"=> " Panas",
           "Phtanah"=> "6",
       "Jenistanah"=> "Humus",
       "Gambar"=> "Anggave.jpg"
],

   ["Kode"=> "TN-0003 ",
   "Nama"=> "Akalifah",
   "Tinggi"=> "20cm ",
   "Suhumin"=> "25cc",
   "Suhumax"=> "27cc",
   "lingkungan"=> "Sejuk",
   "Phtanah"=> "7",
   "Jenistanah"=> "Pasir",
   "Gambar"=> "Akalifa.jpg"

],
["Kode"=> " TN-0004",
"Nama"=> " Asoka daun besar",
"Tinggi"=> " 40cm",
"Suhumin"=> " 29cc",
"Suhumax"=> " 30cc",
"lingkungan"=> " panas",
"Phtanah"=> " 7",
"Jenistanah"=> " Aluvium",
"Gambar"=> "Asokadaunbesar.jpg"
]
];








?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data tanaman</title>
</head>
<body>
    <h1>Data Tanaman</h1>
<ul>

<?php foreach ($tanaman as $tnm) : ?>
                    <li>
                        <a href="tanaman.php?Nama=<?= $tnm["Nama"]; ?>&Kode=<?= $tnm["Kode"]; ?>&Tinggi=<?=$tnm["Tinggi"];?>&Suhumin=<?=$tnm["Suhumin"];?>
                        &Suhumax=<?=$tnm["Suhumax"];?>&lingkungan=<?=$tnm["lingkungan"];?>&Phtanah=<?=$tnm["Phtanah"];?>&Jenistanah=<?=$tnm["Jenistanah"];?>&Gambar=<?=$tnm["Gambar"]?>"><?= $tnm["Nama"]; ?></a>
                    </li>
<?php endforeach ; ?>


</ul>


</body>
</html>