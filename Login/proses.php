<?php
	include 'konek.php';
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

		// $result_login = mysqli_query($connect, $sql)
		$query = "SELECT * FROM user WHERE username = '$username'AND password = '$password'";
		$result = mysqli_query($connect, $query);
		$row = mysqli_fetch_assoc($result);

		if ($row['privilege'] == 1) {
			echo "Selamat Datang Admin, Silahkan menuju "; ?>
			<a href="../CRUD/testinsert.html">Admin Panel</a>
			<?php
		}
		else if($row['privilege'] == 2){
			echo "Selamat Datang Member, Silahkan menuju "; ?>
			<a href="../index.html">Halaman Home</a>
			<?php
		}
		else{
			echo "invalid username & password, please re login";?>
			<a href="index.php">Login Page</a>
			<?php
			echo mysqli_error($connect);
		}
	
?>