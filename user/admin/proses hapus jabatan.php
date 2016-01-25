<?php
	include("../../koneksi/koneksi.php");
	
	$id = $_GET["id"];
	
	$query = "DELETE FROM jabatan WHERE id_jabatan = '$id'";
	$mysql = mysql_query($query);
	if ($mysql) {
		?><script> alert ('Hapus data berhasil'); </script><?php
		echo '<meta http-equiv="Refresh" content="0; url=tampil jabatan.php">';
	} else {
		?><script> alert ('Hapus data gagal');history.go(-1);</script><?php
	}
?>