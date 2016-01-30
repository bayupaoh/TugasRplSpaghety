<?php
  include("../../koneksi/koneksi.php");
  $idmenu=$_GET["idmenu"];
  $idbahanbaku=$_POST["idbahanbaku"];
  $kebutuhan=$_POST["kebutuhan"];

  $query="insert into detailmenu values(null,'$idmenu','$idbahanbaku',$kebutuhan)";

  $mysql=mysql_query($query);
  if($mysql){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tambah detail menu.php?id=$idmenu">';
  }else{
    ?><script>alert('Tambah detail menu gagal');history.go(-1);</script><?php
  }

?>
