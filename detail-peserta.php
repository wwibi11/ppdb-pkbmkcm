<?php
	session_start();
	include 'koneksi/koneksi.php';
	
	$peserta = mysqli_query($conn,"SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."'");
	
	$p = mysqli_fetch_object($peserta);
	
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
		<h2>Detail Peserta</h2>
		
		<div class="box">
				
				<table class="table-data" >
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $p->id_pendaftaran ?> </td>
		</tr>
		
		
		<tr>
			<td>Tahun Pelajaran</td>
			<td>:</td>
			<td><?php echo $p->th_pelajaran ?> </td>
		</tr>
		
		<tr>
			<td>Jenjang</td>
			<td>:</td>
			<td><?php echo $p->jenjang ?> </td>
		</tr>
		
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $p->nama_peserta ?> </td>
		</tr>
		
		<tr>
			<td>Tempat, Tanggal lahir</td>
			<td>:</td>
			<td><?php echo $p->tmp_lahir.", ".$p->tgl_lahir ?> </td>
		</tr>
		
		
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $p->jk ?> </td>
		</tr>
		
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $p->agama ?> </td>
		</tr>
		
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $p->alamat ?> </td>
		</tr>
		
	</table>
			
		</div>
	</section>
  
</body>
</html>