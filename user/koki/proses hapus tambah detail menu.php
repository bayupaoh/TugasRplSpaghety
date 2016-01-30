<?php
  	 include("../../koneksi/koneksi.php");
  	 $id=$_GET['id'];
     $idmenu=$_GET['idmenu'];
		 $query="delete from detailmenu where id_detailmenu='$id'";
		 $mysql=mysql_query($query);
		 if($mysql){
    			?><script>alert('Hapus data berhasil');</script><?php
    			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tambah detail menu.php?id='.$idmenu.'">';
		 }else{
			?><script>alert('Hapus data detail menu gagal');history.go(-1);</script><?php
		 }

?>
