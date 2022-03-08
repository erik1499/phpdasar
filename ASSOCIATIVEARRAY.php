

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
        <style> 
            .kotak {
                    width: 40px;
                    height: 40px;
                    background-color: chartreuse;
                    text-align: center;
                    line-height:40px ;
                    margin: 3px;
                    float: left;
                      transition: 1s;
            }
                .kotak:hover {
                    transform: rotate(360deg);
                     border-radius:50%;
                }
                .clear{
                    clear: both;
                }
        </style>
</head>
<body>
    <?php
    $nilai = [
        [1,2,3],
        [4,5,6],
        [7,8,9],
        [10,11,12,13]
    ];
    ?>
    <?php foreach($nilai as $x ): ?>
        <?php foreach($x as $y ) : ?>
            <div class="kotak"><?= $y; ?></div>
        <?php endforeach; ?>    
        <div class="clear"></div>
    <?php endforeach; ?>
    

    
</body>
</html>

<?php 

echo "<br>";

$angka = [[1,2,3],[4,5,6],[7,8,9,10]];
echo $angka[2] [3];
?>