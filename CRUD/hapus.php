<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $query="DELETE FROM data_siswa WHERE id='$id'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "testInsert.html";
?>
    <a href="testInsert.html">Kembali ke Admin Panel</a>
<?php
    }
    else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }

?>
