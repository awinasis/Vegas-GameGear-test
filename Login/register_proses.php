<?php

    include "konek.php";

    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    $email=$_REQUEST['email'];
    
        if (isset($_POST['kirim'])) {

            $isi_query="INSERT into user(username, password, email) VALUE ('$username','$password','$email')";
            mysqli_query($connect, $isi_query);

            echo "Data ter-upload <br>";
            echo "kembali ke Home <br>" . '<a href="user_input.html">Click Here!</a>';
        }
        

    mysqli_close($connect);

?>