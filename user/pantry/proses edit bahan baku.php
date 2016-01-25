<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$id_bahanbaku = $_POST["idbahanbaku"];
	$nama_bahan = $_POST["namabahanbaku"];
	$satuan = $_POST["satuanbahanbaku"];
	$stok = $_POST["stokbahanbaku"];
	$stok_minimum = $_POST["stokminbahanbaku"];
    $tgl_masuk = $_POST["tanggalmasuk"];
    $tgl_kadaluarsa = $_POST["tanggalkadaluarsa"];
	$id_pegawai = $_SESSION['id_pegawai'];

	
	$query = "UPDATE bahanbaku SET nama_bahan = '$nama_bahan', stok = '$stok', tgl_masuk = '$tgl_masuk', tgl_kadaluarsa = '$tgl_kadaluarsa', stok_minimum = '$stok_minimum', satuan = '$satuan', id_pegawai = '$id_pegawai' WHERE id_bahanbaku = '$id_bahanbaku'";
	
	if (!empty($id_bahanbaku) && !empty($nama_bahan) && !empty($stok) && !empty($stok_minimum) && !empty($tgl_masuk) && !empty($tgl_kadaluarsa) && !empty($id_pegawai)) {
		$mysql = mysql_query($query);
		if ($mysql) {
			?><script> alert ('Tambah data berhasil'); </script><?php
			echo '<meta http-equiv="Refresh" content="0; url=tampil bahan baku.php">';
		} else {
			?><script> alert ('Tambah data gagal');history.go(-1);</script><?php
		}
	} else {
		?><script> alert ('Semua data harus diisi');history.go(-1);</script><?php
	}
?>