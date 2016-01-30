<?php
	include("../../koneksi/koneksi.php");
	
	$idmeja = $_GET["id"];
	
	$query = "DELETE FROM meja WHERE id_meja = '$idmeja'";
	
	$mysql = mysql_query($query);
	if ($mysql) {
		?><script> alert ('Hapus data berhasil'); </script><?php
		echo '<meta http-equiv="Refresh" content="0; url=tampil meja.php">';
	} else {
		?><script> alert (Hapus data gagal');history.go(-1);</script><?php
	}
?>