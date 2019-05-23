<?php

    include "konek.php";

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];
    $privilege=$_REQUEST['privilege'];
    
        if (isset($_POST['kirim'])) {

            $isi_query="UPDATE user SET email='$email',password='$password',privilege='$privilege' WHERE username='$username'";
            mysqli_query($connect, $isi_query);

            echo "Data ter-upload <br>";
            echo "kembali ke Home <br>" . '<a href="user_insert.html">Click Here!</a>';
        }
        

    mysqli_close($connect);

?>