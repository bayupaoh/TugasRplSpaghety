<?php
	include("../../koneksi/koneksi.php");
	
	$idjabatan = $_POST["idjabatan"];
	$namajabatan = $_POST["namajabatan"];
	$gaji = $_POST["gaji"];
	
	$query = "UPDATE jabatan SET nama_jabatan = '$namajabatan', gaji = $gaji WHERE id_jabatan = '$idjabatan'";
	if (!empty($idjabatan) && !empty($namajabatan) && !empty($gaji)) {
		$mysql = mysql_query($query);
		if ($mysql) {
			?><script> alert ('Edit data berhasil'); </script><?php
			echo '<meta http-equiv="Refresh" content="0; url=tampil jabatan.php">';
		} else {
			?><script> alert ('Edit data gagal');history.go(-1);</script><?php
		}
	} else {
		?><script> alert ('Semua data harus diisi');history.go(-1);</script><?php
	}
?>