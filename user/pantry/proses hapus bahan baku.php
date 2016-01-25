<?php
	include("../../koneksi/koneksi.php");
	
	$id_bahanbaku = $_GET["id"];
	
	$query = "DELETE FROM bahanbaku WHERE id_bahanbaku = '$id_bahanbaku'";
	
	$mysql = mysql_query($query);
	if ($mysql) {
		?><script> alert ('Hapus data berhasil'); </script><?php
		echo '<meta http-equiv="Refresh" content="0; url=tampil bahan baku.php">';
	} else {
		?><script> alert ('Hapus data gagal');history.go(-1);</script><?php
	}
?>