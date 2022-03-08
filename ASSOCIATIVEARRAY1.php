<?php
//  $mahasiswa = [
//     ["erik kurniawan ", "092384814", " erikk1429@gmail.com", "manajemen informatika " ],
//     ["mahardika ", "092312494", " mahadika@gmail.com", "teknik informasi " ],
//     ["manda presetya ", "09216361671", " manda194w@gmail.com", "teknik industri " ],
//     ["anindia nanda asoka ", "092314511", " annin913@gmail.com", "teknik sipil " ],  
// ]; 

// array assosiatife
// definisinya sama seperti array numerik  kecuali
// keynya adalah string yang kita buat sendiri
 $Mahasiswa = [
     [
      "Nama" => "erik kurniawan",
      "NIM" => "28349847019",
      "Email" =>"erikk324@gmail.com",
      "Jurusan" => "Manajemen informatika",
      "Gambar" => "erik.jpg"
     ],
     [
        "Nama" => "Aulia Rasra Renofia",
        "NIM" => "28124541334",
        "Email" =>"aulia3010@gmail.com",
        "Jurusan" => "Penerbangan",
        "Gambar" => "rasra.jpg"
       ],
       [
        "Nama" => "Dhanian indra ",
        "NIM" => "283425232",
        "Email" =>"dhanian241@gmail.com",
        "Jurusan" => "teknik sipil",
        "Gambar" => "iya.png"
        // "Nilai" => [98,76,89,89,86]
       ],
];
 
    ;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data mahasiswa</title>
</head>
<body>
<h1> Data Mahasiswa</h1>
    <?php foreach ($Mahasiswa as $mhs): ?>
        
        <ul>
             <!-- foreach ($mahasisawa as $mhs) : 
            <li>  echo $mhs;  </li>
                 endforeach ; -->
                 <li><img src="img/<?= $mhs ["Gambar"]; ?>"></li>
                 <li> nama: <?= $mhs ["Nama"]; ?></li>
                 <li> nim: <?= $mhs ["NIM"]; ?></li>
                 <li> jurusan: <?= $mhs ["Email"]; ?></li>
                 <li> email: <?= $mhs ["Jurusan"]; ?></li>


        </ul>
                <?php endforeach; ?>
               
</body>
</html>