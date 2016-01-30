<?php
	 include("../../koneksi/koneksi.php");
	 $id=$_GET['id'];

		 $query="delete from kategori where id_kategori='$id'";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Hapus data berhasil');</script><?php
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kategori.php">';
		 }else{
			?><script>alert('Hapus data gagal');history.go(-1);</script><?php
		 }

?>
