<?php
 
 //koneksi ke data base

 
 
//  $servername = "localhost";
//  $username = "root";
//  $password = "";
//  $dbname = "dasarphp";
//  try {
//    $conn = new PDO("mysql:host=$servername;dbname=dasarphp", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//  } catch(PDOException $e) {
//    echo "Connection failed: " . $e->getMessage();
//  }
$conn = mysqli_connect("localhost" , "root", "", "dasarphp");
 


// ambil data dari mahasiswa / query data mahasiswa

$result = mysqli_query($conn, "SELECT * FROM datamaba" );
if (!$result) {
    echo mysqli_error($conn);
}

// ambil data (fetc)  maba dari objct result
// mysqli_fetc_row()  menggembalikan array numerik
// mysqli_fetc_assoc() menggembalikan array associative
// mysqli_fetc_array() menggembalikan keduanya 
// mysqli_fetc_object()

// engga ush pake while juga bisa

// while ($mhs = mysqli_fetch_assoc($result)) (

// var_dump($mhs ) )



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1> Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" callspacing="0">

        
    <tr>
            <th>No. </th>
            <th>Aksi </th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>
        <?php $i=1; ?>
        <?php while  ( $row = mysqli_fetch_assoc($result) ) : ?>  
        <tr>
           
            <td><?= $i; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>

            </td>
            <td><img src="img/<?=  $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?=$row["nim"]; ?></td>
            <td><?=$row["jurusan"]; ?> </td>
            <td><?=$row["email"]; ?></td>
        </tr>
        <?=  $i++;?>
        <?php endwhile; ?>
    </table>
</body>
</html>