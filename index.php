<?php
	include 'koneksi/koneksi.php';
	
	if(isset($_POST['submit'])) {
		// Generate New ID
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran,5)) AS id FROM tb_pendaftaran");

		$d = mysqli_fetch_object($getMaxId);

			$generatedid = 'P' . date('Y') . sprintf("%05s", $d->id + 1);
			
			echo $generatedid;
			$insert = mysqli_query($conn,"INSERT INTO tb_pendaftaran VALUES (
    '".$generatedid."',
    '".date('Y-m-d')."',
    '".mysqli_real_escape_string($conn, $_POST['th_p'])."',
    '".mysqli_real_escape_string($conn, $_POST['Paket'])."',
    '".mysqli_real_escape_string($conn, $_POST['nama'])."',
    '".mysqli_real_escape_string($conn, $_POST['tmp_lahir'])."',
    '".mysqli_real_escape_string($conn, $_POST['tgl_lahir'])."',
    '".mysqli_real_escape_string($conn, $_POST['jk'])."',
    '".mysqli_real_escape_string($conn, $_POST['agama'])."',
    '".mysqli_real_escape_string($conn, $_POST['alamat'])."'
)");
	
	if($insert) {
		echo '<script>window.location="berhasil.php?id='.$generatedid.'"</script>';
	} else { 
		echo 'EROOOOOOOR'.mysqli_error($conn);
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

		<section class="box-formulir">
			<h2>Formulir Pendaftaran Siswa Baru</h2>
			 
			 <!-- bagian form -->
			 <form action="" method="post">
				<div class="box">
					<table border=0 class="table-form">
						<tr>
							<td>Tahun Pelajaran</td>
							<td>:</td>
							<td>
								<input type="text" name="th_p" class="input-control" value="2024/2025" readonly>
							</td>
						</tr>
						
						<tr>
							<td>Jenjang</td>
							<td>:</td>
							<td>
								<select class="input-control" name="Paket">
									<option value="">Pilih Jenjang</option>
									<option value="Paket A">Kejar Paket A</option>
									<option value="Paket B">Kejar Paket B</option>
									<option value="Paket C">Kejar Paket C</option>
								</select>
							</td>
						</tr>
						
					</table>
				</div>
			 
				<h3>Data Diri</h3>
				<div class="box">
					<table border=0 class="table-form">
						<tr>
							<td>Nama lengkap</td>
							<td>:</td>
							<td>
								<input type="text" name="nama" class="input-control">
							</td>
						</tr>
						
						<tr>
							<td>Tempat Lahir</td>
							<td>:</td>
							<td>
								<input type="text" name="tmp_lahir" class="input-control">
							</td>
						</tr>
						
						<tr>
							<td>Tanggal Lahir</td>
							<td>:</td>
							<td>
								<input type="date" name="tgl_lahir" class="input-control">
							</td>
						</tr>
						
						<tr>
							<td>Jenis Kelamin</td>
							<td>:</td>
							<td>
								<input type="radio" name="jk" class="input-control" value="Laki-laki"> Laki-laki &nbsp;
								<input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
							</td>
						</tr>
						
						<tr>
							<td>Agama</td>
							<td>:</td>
							<td>
								<select class="input-control" name="agama">
									<option value="">Pilih Agama</option>
									<option value="islam">Islam</option>
									<option value="kristen-k">Kristen Protestan</option>
									<option value="kristen-p">Kristen Katolik</option>
									<option value="budha">Budha</option>
									<option value="hindu">Hindu</option>
									<option value="konghuchu">Konghuchu</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td>
								<textarea type="text" name="alamat" class="input-control"></textarea>
							
							</td>
						</tr>
						
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
							</td>
						</tr>
						
					</table>
				</div>
			 
			 
			 
			 </form>
			
			
		</section>




</body>
</html>