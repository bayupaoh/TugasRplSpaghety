<?php
	include("../../koneksi/koneksi.php");

	$nip = $_POST["nip"];
	$namadepan = $_POST["namadepan"];
	$namabelakang = $_POST["namabelakang"];
	$namapegawai = $namadepan." ".$namabelakang;
	$jk = $_POST["jk"];
	$tempatlahir = $_POST["tempatlahir"];
	$tanggallahir = $_POST["tanggallahir"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$alamat = $_POST["alamat"];
	$telepon = $_POST["telepon"];
	$idjabatan = $_POST["jabatan"];
	$foto = $_FILES["file"]["name"];

	$target = "../../img/pegawai/".$foto;

	$hasil="f";

	if(!empty($password)){
		$query = "update pegawai set password=md5('$password') where id_pegawai='$nip'";
		$mysql=mysql_query($query);
		if($mysql){
			$hasil="t";
		}else{
			?><script> alert ('Edit data gagal');history.go(-1);</script><?php
		}
	}

	if(!empty($foto)){
		if (($_FILES["file"]["type"] != "image/jpeg") && ($_FILES["file"]["type"] != "image/png")) {
			?><script> alert ('Foto harus dalam ekstensi .jpg atau .png');history.go(-1);</script><?php
		}else{
			if($_FILES["file"]["size"] >= 2000000) {
				?><script> alert ('Ukuran file tidak boleh lebih dari 2MB');history.go(-1);</script><?php
			}else{

				if(move_uploaded_file($_FILES["file"]["tmp_name"],$target)) {
					$query = "update pegawai set foto='$foto' where id_pegawai='$nip'";
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



	if (!empty($nip) && !empty($namadepan) && !empty($namabelakang ) && !empty($jk) && !empty($tempatlahir) && !empty($tanggallahir) && !empty($email) && !empty($alamat) && !empty($telepon) && !empty($idjabatan)) {

	$query = "UPDATE pegawai SET nama_pegawai='$namapegawai', alamat='$alamat', tempat_lahir='$tempatlahir', tanggal_lahir='$tanggallahir',jk='$jk', telp='$telepon', email='$email', id_jabatan='$idjabatan' where id_pegawai='$nip'";

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
						echo '<meta http-equiv="Refresh" content="0; url=tampil pegawai.php">';
	}
?>
