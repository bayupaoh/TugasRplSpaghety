<?php
	 include("../../koneksi/koneksi.php");
	 $idkategori=$_POST['idkategori'];
	 $namakategori=$_POST['namakategori'];

	 if(!empty($idkategori)  && !empty($namakategori)){
		 $query="update kategori set nama_kategori='$namakategori'  where id_kategori='$idkategori'";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Edit data berhasil');</script><?php
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kategori.php">';
		 }else{
			?><script>alert('Edit data gagal');history.go(-1);</script><?php
		 }
	 }else{
		 ?><script>alert('Semua data harus terisi');history.go(-1);</script><?php
	}

?>
