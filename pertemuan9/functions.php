<?php
// koneksi data base
$conn = mysqli_connect("localhost" , "root", "", "dasarphp");

//   $servername = "localhost";
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
 
 function query($query){
     global $conn;
        $result= mysqli_query( $conn , $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result) ) {
                $rows[] = $row;
        }
            return $rows;
 }

 function tambah($data){

        global $conn;
    
        $nama= htmlspecialchars($data["nama"]);
        $nim= htmlspecialchars($data["nim"]);
        $email= htmlspecialchars($data["email"]);
        $jurusan= htmlspecialchars($data["jurusan"]);
        $gambar= htmlspecialchars($data["gambar"]);
    
    
        $query = "INSERT INTO datamaba
                VALUE
                ('','$nama','$nim','$email','$jurusan','$gambar')
                        ";
      mysqli_query($conn, $query);
    
     return mysqli_affected_rows($conn);
    }

?>