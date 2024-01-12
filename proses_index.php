<?php
	include 'koneksi/koneksi.php';
	
	if(isset($_POST['submit'])) {
		// Generate New ID
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran,5)) AS id FROM tb_pendaftaran");

		$d = mysqli_fetch_object($getMaxId);

			$generatedID = 'P' . date('Y') . sprintf("%05s", $d->id + 1);
			echo "Generated ID: $generatedID";
	}
?>