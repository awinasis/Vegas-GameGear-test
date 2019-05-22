<?php
   
   include "koneksi.php";
   $connect = mysqli_connect ($namaHost, $username, $password);

    if($connect){
        echo "Koneksi dengan MySQL berhasil";
    }
    else{
        echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
    }

    if (mysqli_query($connect, "CREATE DATABASE test")){
        echo "Database berhasil dibuat";
    }
    else{
        echo "Database gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);

?>