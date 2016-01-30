<?php
	include("../../koneksi/koneksi.php");

	$idmenu = $_POST["idmenu"];
	$namamenu = $_POST["namamenu"];
	$harga = $_POST["harga"];
  $diskon = $_POST["diskon"];
	$deskripsi = $_POST["deskripsi"];
  $stok = $_POST["stok"];
	$idkategori = $_POST["idkategori"];
	$foto = $_FILES["file"]["name"];

	$target = "../../img/makanan/".$foto;

	$query = "INSERT INTO menu VALUES ('$idmenu', '$namamenu', $harga, $diskon, $stok, '$foto','$deskripsi' ,'$idkategori')";
	echo $query;
	if (!empty($idmenu) && !empty($namamenu) && !empty($harga) && !empty($deskripsi) && !empty($stok) && !empty($foto) && !empty($idkategori)) {
		if (($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png")) {
			?><script> alert ('Foto harus dalam ekstensi .jpg atau .png');history.go(-1);</script><?php
		} else {
			if($_FILES["file"]["size"] >= 2000000) {
				?><script> alert ('Ukuran file tidak boleh lebih dari 2MB');history.go(-1);</script><?php
			} else {
				if(move_uploaded_file($_FILES["file"]["tmp_name"],$target)) {
					$mysql = mysql_query($query);
					if ($mysql) {
						?><script> alert ('Tambah data menu berhasil'); </script><?php
						echo '<meta http-equiv="Refresh" content="0; url=tambah detail menu.php?idmenu='.$idmenu.'">';
					} else {
						?><script> alert ('Tambah data menu gagal');history.go(-1);</script><?php
					}
				} else {
						?><script> alert ('Tambah data menu gagal');history.go(-1);</script><?php
				}
			}
		}
	} else {
		?><script> alert ('Semua data harus diisi');history.go(-1);</script><?php
	}
?>
