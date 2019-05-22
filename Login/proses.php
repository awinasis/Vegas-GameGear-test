<?php
	include 'konek.php';
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if (!empty($username) && !empty($password)) {
		$sql = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username'AND password = '$password'");
		 // AND password = '$password'
		$result = mysqli_num_rows($sql);
		if ($result) {
			header('Location: ../CRUD/testinsert.html');

		}else{
			echo "invalid username & password";
		}
	}else{
		echo "email dan password kosong, silahkan isi";
	}
?>