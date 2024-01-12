<?php
	session_start();
	include 'koneksi/koneksi.php';
	
	if ($_SESSION['stat_login'] != true) {
		echo '<script>window.location="admin.php"</script>';
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashbord Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

	<header>
		<h1>Admin PKBM</h1>
		<ul>
			<li> <a href="beranda.php">Beranda </a></li>
			<li> <a href="data-peserta.php">Data Peserta </a></li>
			<li> <a href="keluar.php">Keluar </a></li>
		</ul>
	</header>
  
	<section class="content">
		<h2>Beranda</h2>
		
		<div class="box">
			<h3> <?php echo $_SESSION['nm_admin'] ?>, Selamat Datang di Dashboard Admin</h3>
		</div>
	</section>
  
</body>
</html>