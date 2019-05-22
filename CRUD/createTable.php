<?php
    // $namaHost = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "praktikumdb";

    // $connect = mysqli_connect ($namaHost, $username, $password, $database);

    include "koneksi.php";

    if($connect){
        echo "Koneksi dengan MySQL berhasil <br>";
    }
    else{
        echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
    }

    $sql = "CREATE TABLE data_siswa(
        id INT PRIMARY KEY,
        nama VARCHAR(30) NOT NULL,
        sekolah VARCHAR(50) NOT NULL)";
    
    if (mysqli_query($connect, $sql)){
        echo "Table mahasiswa berhasil dibuat";
    }
	else{
		echo "table mahasiswa gagal dibuat <br>" . mysqli_error($connect);
	}
	
	mysqli_close($connect);
    
    
    

?>