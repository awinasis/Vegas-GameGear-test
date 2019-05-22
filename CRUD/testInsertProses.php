<?php

    include "koneksi.php";

    $nama_barang=$_REQUEST['nama_barang'];
    $harga=$_REQUEST['harga'];
    $kategori=$_REQUEST['kategori'];
    $merk=$_REQUEST['merk'];
    
        if (isset($_POST['kirim'])) {
            //simpan nama file
            $image_name=$_FILES['image_name']['name'];
            //direktori pindahan gambar
            $target= "img/".basename($image_name);
            $isi_query="INSERT into data_siswa(merk, nama_barang, kategori, harga, image_name) VALUE ('$merk','$nama_barang','$kategori','$harga','$image_name')";
            mysqli_query($connect, $isi_query);

            if (move_uploaded_file($_FILES['image_name']['tmp_name'],$target)) {
                $pesan = "Gambar telah di upload";
            }
            else {
                $pesan = "Gambar gagal di upload";
            }
            echo "Data ter-upload <br>";
            echo "kembali ke Home <br>" . '<a href="testinsert.html">Click Here!</a>';
        }
        

    mysqli_close($connect);

?>