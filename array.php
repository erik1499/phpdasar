<?php

// array adalah variable yang menampung banyak nilai 
// elmen pada array boleh menggunakan tipdata yang berbeda
// pasangan antara key dan value
// key nya adalah index , dimulai dari nol 

// membuat array 
// cara lama
$hari = array("senin", " selasa" ," rabu" ," kamis", " jumat", "sabtu " , " minggu");

$bulan = ["januari","februari","maret","april","mei","juni","juli","agustus","september","oktober","novemver","desember"];
$aara = [1499,"september" ,"aowkaokwka" , false ];

// melampirkan array

// var_dump($hari);

// echo "<br>";

// print_r($bulan);

echo "<br>";

// echo "erik lahir di bulan", $aara[1];

echo "<br>";

// menambahkan elmen baru pada array
// var_dump($aara);
// $aara [] = "bahagia";
// echo "<br>";
// var_dump($aara);


// pengulangan pada array 
// meggunakan for/ foreach

$angka =  [12,31,34,52,60,32,34,234,15,423,56.135,42,522];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array </title>
    <style>
            .kotak{
                    width:50px;
                    height: 50px;
                background-color: salmon;
                text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            }
                .clear{clear :both}
    </style>

</head>
<body>
    <?php for($i =0; $i<count($angka); $i++){   ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
        <?php } ?>
        <div class="clear"></div>

        <?php foreach( $angka as $a ){ ?>
            <div class="kotak"><?php echo $a; ?> </div>
            <?php } ?>
            <div class="clear"></div>
            <?php foreach ($angka as $a) : ?>
                <div class="kotak" > <?= $a ; ?></div>
                <?php endforeach; ?>

</body>
</html>