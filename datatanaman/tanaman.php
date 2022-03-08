<?php 
 $tanaman = [
     ["Kode"=>  "TN-0001",
                 "Nama"=> "Airis",
                     "Tinggi"=> "40",
                        "Suhumin"=> "27",
                             "Suhumax"=> "27",
                        "lingkungan"=> "Sejuk",
                 "Phtanah"=> "7",
        "Jenistanah"=> "Humus",
        "Gambar"=> "airis.jpg"
     ],
        ["Kode"=> "TN-0002",
                "Nama"=> " Anggave",
                    "Tinggi"=> " 40 ",
                        "Suhumin"=> "29",
                    "Suhumax"=> "30",
                "lingkungan"=> " Panas",
            "Phtanah"=> "6",
        "Jenistanah"=> "Humus",
        "Gambar"=> "Anggave.jpg"
],

    ["Kode"=> "TN-0003 ",
    "Nama"=> "Akalifah",
    "Tinggi"=> "20",
    "Suhumin"=> "25",
    "Suhumax"=> "27",
    "lingkungan"=> "Sejuk",
    "Phtanah"=> "7",
    "Jenistanah"=> "Pasir",
    "Gambar"=> "Akalifa.jpg"

],
["Kode"=> " TN-0004",
"Nama"=> " Asoka daun besar",
"Tinggi"=> " 40",
"Suhumin"=> " 29",
"Suhumax"=> " 30",
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
    <title>DATA TANAMAN </title>
</head>
<body>
<h1> DATA TANAMAN</h1>    
            <?php foreach ($tanaman as $tnm): ?>
                    <ul>
                        <li><img src="img/<?= $tnm["Gambar"]; ?>" ></li>
                            <li>Kode: <?= $tnm["Kode"]; ?></li>
                                    <li>Nama:<?=$tnm["Nama"]; ?></li>
                                            <li>Tinggi:<?= $tnm["Tinggi"];?></li>
                                                    <li>Suhumin:<?= $tnm["Suhumin"];?></li>
                                                <li>Suhumax:<?=$tnm["Suhumax"]; ?></li>
                                            <li>Lingkungan:<?= $tnm["lingkungan"];?></li>
                                    <li>PHtanah:<?=$tnm["Phtanah"]; ?></li>
                            <li>Jenistanah:<?= $tnm["Jenistanah"];?></li>



                    </ul>
                <?php endforeach; ?>
</body>
</html>