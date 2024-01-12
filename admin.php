<?php
	session_start();
	include 'koneksi/koneksi.php';
	
	if(isset($_POST['login'])){
		$cek = mysqli_query($conn,"SELECT * FROM tb_admin WHERE user_admin = '".htmlspecialchars($_POST['User'])."' AND pass = '".htmlspecialchars($_POST['Pass'])."' ");
	
		if(mysqli_num_rows($cek) > 0) {
			$a = mysqli_fetch_object($cek);
			
			$_SESSION['stat_login'] = true;
			$_SESSION['id_admin'] = $a->id_admin;
			$_SESSION['nm_admin'] = $a->nm_admin;
			echo '<script>window.location="beranda.php"</script>';
		} else {
			 echo '<script>alert("Gagal, Username atau Password salah")</script>';
		}
	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PSB PKBM KCM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

		<section class="main-login">
					
			<div class="box-login">
				<h2>Login Admin</h2>
			
			<form action="" method="post">
				<!--form login-->
				<div class="box">
					<table>
						<tr>
							<td>Username</td>
							<td>:</td>
							<td>
								<input type="text" name="User" class="input-control">
							</td>
						</tr>
						
						<tr>
							<td>Password</td>
							<td>:</td>
							<td>
								<input type="Password" name="Pass" class="input-control">
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="login" value="Login" class="btn-login">
							</td>
						</tr>
					</table>
				</div>
				
				</form>
			</div>
			
			
		</section>




</body>
</html>