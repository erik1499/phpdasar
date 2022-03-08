<?php
$mahasiswa = 
[["erik kurniawan" , "237033437" , "Manajemen Informatika", " erikk1629@gmail.com "  ],
["brahim" , "2331031237" , "Manajemen ", " nanto1334@gmail.com "  ],
["fopi" , "232563437" , "akutansi", " foppi112@gmail.com "  ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa </title>
</head>
<body>
    <h1> Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
             <!-- foreach ($mahasisawa as $mhs) : 
            <li>  echo $mhs;  </li>
                 endforeach ; -->
                 <li> nama: <?= $mhs [0] ?></li>
                 <li> nim: <?= $mhs [1] ?></li>
                 <li> jurusan: <?= $mhs [2] ?></li>
                 <li> email: <?= $mhs [3] ?></li>


        </ul>
                <?php endforeach; ?>
</body>
</html>