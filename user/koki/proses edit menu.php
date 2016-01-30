<?php
	include("../../koneksi/koneksi.php");

  $idmenu = $_POST["idmenu"];
	$namamenu = $_POST["namamenu"];
	$harga = $_POST["harga"];
  $diskon = $_POST["diskon"];
  $stok = $_POST["stok"];
	$idkategori = $_POST["idkategori"];
	$foto = $_FILES["file"]["name"];
	$deskripsi = $_POST['deskripsi'];
	$target = "../../img/makanan/".$foto;

	$hasil="f";

	if(!empty($foto)){
		if (($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png")) {
			?><script> alert ('Foto harus dalam ekstensi .jpg atau .png');history.go(-1);</script><?php
		}else{
			if($_FILES["file"]["size"] >= 2000000) {
				?><script> alert ('Ukuran file tidak boleh lebih dari 2MB');history.go(-1);</script><?php
			}else{

				if(move_uploaded_file($_FILES["file"]["tmp_name"],$target)) {
					$query = "update menu set foto='$foto' where id_menu='$idmenu'";
					$mysql=mysql_query($query);
					if($mysql){
						$hasil="t";
					}else{
						?><script> alert ('Edit data gagal');history.go(-1);</script><?php
					}
				}else{
						?><script> alert ('Edit data gagal');history.go(-1);</script><?php
				}

			}
		}

	}


	$query = "UPDATE menu SET nama_menu='$namamenu',deskripsi='$deskripsi' ,harga='$harga', stok='$stok' where id_menu='$idmenu'";
	if (!empty($idmenu) && !empty($namamenu) && !empty($deskripsi) && !empty($harga) && !empty($stok)) {

					$mysql = mysql_query($query);
					if ($mysql) {
						$hasil="t";
					} else {
						?><script> alert ('Edit data gagal');history.go(-1);</script><?php
					}


	} else {
		?><script> alert ('Semua data harus diisi');history.go(-1);</script><?php
	}

	if($hasil == "t"){
						?><script> alert ('Edit data berhasil'); </script><?php
						echo '<meta http-equiv="Refresh" content="0; url=tambah detail menu.php?id='.$idmenu.'">';

	}
?>
