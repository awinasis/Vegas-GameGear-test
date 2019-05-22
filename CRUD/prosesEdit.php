<?php

    include "koneksi.php";

    $id=$_REQUEST['id'];
    $merk=$_REQUEST['merk'];
    $nama_barang=$_REQUEST['nama_barang'];
    $kategori=$_REQUEST['kategori'];
    $harga=$_REQUEST['harga'];


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
    }


    if($pesan){
        echo "Berhasil update data ke database";
?>
    <a href="testinsert.html">kembali ke admin panel</a>
<?php
    }else{
        echo "Gagal update data" . mysqli_error($connect);
    }
?>