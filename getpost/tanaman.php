<?php 

// cek apakah tidak ada data  di Get

if (!isset($_GET["Gambar"]) ||
        !isset($_GET["Nama"])||
                !isset($_GET["Kode"])||
                    !isset($_GET["Tinggi"])||
                !isset($_GET["Suhumin"])||
            !isset($_GET["Suhumax"])||
        !isset($_GET["lingkungan"])||
    !isset($_GET["Phtanah"])||
!isset($_GET["Jenistanah"])    ) {
    header("Location: getpost.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data tanaman</title>
</head>
<body>
    <ul>

            <li><img src="img/<?= $_GET["Gambar"]; ?>" ></li>
               <li>Nama  :<?= $_GET["Nama"]; ?></li>
                     <li>Kode :<?= $_GET["Kode"]; ?></li>
                            <li>Tinggi :<?= $_GET["Tinggi"]; ?></li>
                                     <li>Suhumin<?= $_GET["Suhumin"]; ?></li>
                                <li>Suhumax :<?= $_GET["Suhumax"]; ?></li>
                            <li>Lingkungan :<?= $_GET["lingkungan"]; ?></li>
                        <li>Ph Tanah :<?= $_GET["Phtanah"]; ?></li>
                    <li>Jenistanah :<?= $_GET["Jenistanah"]; ?></li>
               

    </ul>
    <a href="getpost.php">Kembali Ke Daftar Tanaman</a>
</body>
</html>