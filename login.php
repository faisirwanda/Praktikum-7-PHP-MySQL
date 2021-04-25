<?php  
session_start();
include('koneksi.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<form method="post">
	<table>
		<tr>
			<td><label><b>Username : </b></label></td>
			<td><input type="text" name="username"><br></td>
		</tr>
		<tr>
			<td><label><b>Password : </b></label></td>
			<td><input type="password" name="password"><br></td>
		</tr>
		<tr>
			<td><button type="submit" name="login">Login</button></td>
		</tr>
	</table>
	</form>
		<?php  
			if (isset($_POST['login'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];
				$query = mysqli_query($koneksi," SELECT *FROM user where username='$username' AND password=$password");
				$cek=mysqli_num_rows($query);
				if($cek==1){
					$_SESSION['userweb']=$username;
					header('location:index.php');
					exit;
				}
				else{
					echo "Maaf Username dan Password Anda Salah";
				}
			}
		?>
</body>
</html>