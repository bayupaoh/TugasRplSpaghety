<?php
  	 include("../../koneksi/koneksi.php");
  	 $id=$_GET['id'];

		 $query="delete from detailmenu where id_menu='$id'";
		 $mysql=mysql_query($query);
		 if($mysql){

       $query2="delete from menu where id_menu='$id'";
       $mysql2=mysql_query($query2);
       if($mysql2){
    			?><script>alert('Hapus data Menu berhasil');</script><?php
    			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tampil menu.php">';
       }else{
         ?><script>alert('Hapus data menu gagal');history.go(-1);</script><?php
       }

		 }else{
			?><script>alert('Hapus data detail menu gagal');history.go(-1);</script><?php
		 }

?>
