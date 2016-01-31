<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];

	$idmeja = $_GET['id'];
	$nopesanan = $_POST['nopesanan'];

	if(empty($nopesanan)){
		?><script> alert ('No Transaksi Tidak Boleh Kosong');history.go(-1);</script><?php
	}else{
		$query = "insert into pesanan values('$nopesanan',now(),0,0,0,'Belum','$idpegawai','$idmeja')";
		$mysql = mysql_query($query);
		if(mysql){
			$query2 = "UPDATE meja SET status = 'Terisi' WHERE id_meja = '$idmeja'";
			$mysql2 = mysql_query($query2);
			if($mysql2){
        echo '<meta http-equiv="Refresh" content="0; url=pesan order.php?idmeja='.$idmeja.'&idpesan='.$nopesanan.'">';
			}else{
				?><script> alert ('Order gagal');history.go(-1);</script><?php
			}
		}else{
			?><script> alert ('Order gagal');history.go(-1);</script><?php
		}

	}


?>
