<?php
  include("../../koneksi/koneksi.php");
  $id_menu=$_GET["id"];
  $iddetail=$_GET["idmenu"];
  $query="delete from detailmenu where id_detail='$iddetail'";
  echo $query;
  $mysql=mysql_query($query);
  if($mysql){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tambah detail menu.php?id=$idmenu">';
  }else{
    ?><script>alert('Tambah detail menu gagal');history.go(-1);</script><?php
  }

?>
