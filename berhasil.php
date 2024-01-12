<?php
	include 'koneksi/koneksi.php';
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

		<section class="box-formulir">
			<h2>Pendaftaran berhasil</h2>
			
			<div class="box">
				<h4> Kode pendaftaran Anda : <?php echo $_GET['id'] ?> </h4>
				<a href="cetak-bukti-daftar.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetakk">Cetak Bukti Pendaftaran</a>
			</div>
			
			
		</section>




</body>
</html>