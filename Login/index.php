<html>
<head>
	<title>Form Login PhP mysql</title>

	<style>
		body{
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.outer-box{
			background: black;
			opacity: 0.7;
		}

		.box{
			align-self: center;
			border: solid 2px blue;
			width: 500px;
			height: 300px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		input{
			width: 180px;
			height: 35px;
			padding: 10px;
			border: 2px solid blue;
			border-radius: 20px;
			background: black;
			outline: none;
			color: white;
		}

		input[type='submit']{
			width: 70px;
			height: 50px;
		}

	</style>

</head>
<body style="background: url('../Assets/Wallpaper/Welcome-clear.jpg');">
	
	<div class="outer-box">
		<div class="box">
			<form action="proses.php" method="post">
				<table>
					<tr>	
						<td colspan="2"><input type="text" name="username" placeholder="username"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="password" name="password" placeholder="password"></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="masuk" style="margin-left: 55px"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>