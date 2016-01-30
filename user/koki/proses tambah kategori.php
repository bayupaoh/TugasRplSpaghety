<?php
	 include("../../koneksi/koneksi.php");
	 $idkategori=$_POST['idkategori'];
	 $namakategori=$_POST['namakategori'];
	 if(!empty($idkategori)  && !empty($namakategori)){
		 $query="insert into kategori value('$idkategori','$namakategori')";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Tambah data kategori berhasil');</script><?php
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kategori.php">';
		 }else{
			?><script>alert('Tambah data kategori gagal');history.go(-1);</script><?php
		 }
	 }else{
		 ?><script>alert('Semua data harus terisi');history.go(-1);</script><?php
	}

?>
