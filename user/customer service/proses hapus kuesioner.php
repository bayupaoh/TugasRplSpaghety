<?php
	 include("../../koneksi/koneksi.php");
	 $id=$_GET['id'];

		 $query="delete from kuesioner where id_kuesioner='$id'";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Hapus data berhasil');</script><?php
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kuisioner.php">';
		 }else{
			?><script>alert('Hapus data gagal');history.go(-1);</script><?php
		 }		

?>
