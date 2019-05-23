<?php
    include "konek.php";

    $username=$_GET['username'];
    $query="DELETE FROM user WHERE username='$username'";
    $result=mysqli_query($connect, $query);

    if($result){
        echo "testInsert.html";
?>
    <a href="user_insert.html">Kembali ke User Control</a>
<?php
    }
    else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }

?>
