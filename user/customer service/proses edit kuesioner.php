<?php
	 include("../../koneksi/koneksi.php");
	 $id=$_POST['idkuesioner'];
	 $pertanyaan=$_POST['pertanyaan'];
	 if(!empty($id)  && !empty($pertanyaan)){
		 $query="update kuesioner set pertanyaan='$pertanyaan'  where id_kuesioner='$id'";
		 $mysql=mysql_query($query);
		 if($mysql){
			?><script>alert('Edit data berhasil');</script><?php			
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil kuisioner.php">';	
		 }else{
			?><script>alert('Edit data gagal');history.go(-1);</script><?php				 
		 }		 
	 }else{
		 ?><script>alert('Semua data harus terisi');history.go(-1);</script><?php
	}

?>