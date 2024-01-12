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
	
	
	<!-- UNTUK CETAK  -->
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Laporan Calon Peserta Didik</h2>
	<br>
	<table class="tabel" border=1>
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pendaftaran</th>
						<th>Tahun Pelajaran</th>
						<th>Jenjang</th>
						<th>Nama Peserta Didik</th>
						<th>Tempat, Tanggal lahir</th>
						<th>Jenis Kelamin</th>
						<th>Agama</th>
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
						<td> <?php echo $row['th_pelajaran'] ?></td>
						<td> <?php echo $row['jenjang'] ?></td>
						<td> <?php echo $row['nama_peserta'] ?></td>
						<td> <?php echo $row['tmp_lahir'].', '.$row['tgl_lahir'] ?></td>
						<td> <?php echo $row['jk'] ?></td>
						<td> <?php echo $row['agama'] ?></td>
					</tr>	
					
					<?php
						}
					?>
					
				</tbody>
				
				
				
			</table>
	
</body>
</html>