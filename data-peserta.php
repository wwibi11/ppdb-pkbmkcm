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
		<h2>Data Peserta Didik</h2>
		
		<div class="box">
			<a href="cetak-peserta.php" target="_blank" class="btn-cetakk">Cetak Data</a>
			
			<table class="tabel" border=1>
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pendaftaran</th>
						<th>Nama Peserta Didik</th>
						<th>Jenis Kelamin</th>
						<th>Jenjang</th>
						<th>Aksi</th>
					</tr>
				</thead>
				
				
				<tbody>
					<?php
						$no = 1;
						$list_data = mysqli_query($conn,"SELECT * FROM tb_pendaftaran");
						
						while($row = mysqli_fetch_array($list_data)) {
					?>		
				
					<tr>
						<td> <?php echo $no++ ?></td>
						<td> <?php echo $row['id_pendaftaran'] ?></td>
						<td> <?php echo $row['nama_peserta'] ?></td>
						<td> <?php echo $row['jk'] ?></td>
						<td> <?php echo $row['jenjang'] ?></td>
						<td> 
							<a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
							<a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Hapus</a>

						</td>
					</tr>	
					
					<?php
						}
					?>
					
				</tbody>
				
				
				
			</table>
			
			
			
			
		</div>
	</section>
  
</body>
</html>