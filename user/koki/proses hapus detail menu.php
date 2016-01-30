<?php
  $id_detail=$_GET["id_detail"];

  $query="delete from detail_menu where id_menu='$id_detail'";
  $mysql=mysql_query($query);
  if($mysql){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tambah detail menu.php?id=$id_menu">';
  }else{
    ?><script>alert('Hapus menu gagal');history.go(-1);</script><?php
  }

?>
