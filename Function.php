<?php 

// Date
// date untuk menampilkan tanggal waktu tertentu
// echo date("l, D-M-Y");

// time 
//  UNIX timestamp / epoc time
//  detik yang sudah berlalu sejak 1 januari 1970
// echo time(); 
// echo date("l" , time() + 60*60*24*100 );
 // mktime 
 // membuat sendiri detik
 // mktime(0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
// echo "<br> ";
//     echo  date("l", mktime(0,0,0,9,14,1999));
// echo "<br>";

// echo strtotime("14 sep 1999");
function salam ($waktu = "datang" ,$nama = "admin"){
    return "selamat $waktu, $nama ";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar function</title>
</head>
<body>
<h1>  <?= salam( "sore", "Erik kurniawan"); ?>  </h1>    

</body>
</html>