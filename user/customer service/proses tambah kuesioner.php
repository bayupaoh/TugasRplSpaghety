<?php
	 include("../../koneksi/koneksi.php");
	 $id=$_POST['idkuesioner'];
	 $pertanyaan=$_POST['pertanyaan'];
	 if(!empty($id)  && !empty($pertanyaan)){
		 $query="insert into kuesioner value('$id','$pertanyaan')";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Tambah data berhasil');</script><?php			
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kuisioner.php">';	
		 }else{
			?><script>alert('Tambah data gagal');history.go(-1);</script><?php				 
		 }		 
	 }else{
		 ?><script>alert('Semua data harus terisi');history.go(-1);</script><?php
	}

?>