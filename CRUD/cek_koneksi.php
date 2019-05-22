<?php
    
    include "koneksi.php";

    if($connect){
        echo "Koneksi dengan MySQL berhasil";
    }
    else{
        echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
    }

?>