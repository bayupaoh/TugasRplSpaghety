<?php
	include("../../koneksi/koneksi.php");

	$idmeja = $_POST["idmeja"];
	$namameja = $_POST["namameja"];
	$status = $_POST["status"];
	$idpegawai = $_GET["id"];

	$query = "INSERT INTO meja VALUES ('$idmeja', '$status','$idpegawai','$namameja')";
	
	if (!empty($idmeja) && !empty($namameja) && !empty($status) && !empty($idpegawai)) {
		$mysql = mysql_query($query);
		if ($mysql) {
			?><script> alert ('Tambah data berhasil'); </script><?php
			echo '<meta http-equiv="Refresh" content="0; url=tampil meja.php">';
		} else {
			?><script> alert ('Tambah data gagal');history.go(-1);</script><?php
		}
	} else {
		?><script> alert ('Semua data harus diisi');history.go(-1);</script><?php
	}
?>
