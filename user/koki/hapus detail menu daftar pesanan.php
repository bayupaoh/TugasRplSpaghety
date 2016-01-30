<?php
  $id_detail=$_GET["id_detail"];
  $nopesanan=$_GET["nopesanan"];

  $query="delete from detail_menu where id_menu='$id_detail'";
  $mysql=mysql_query($query);
  if($mysql){
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=detail pesanan.php?id=$nopesanan';
  }else{
    ?><script>alert('Hapus menu gagal');history.go(-1);</script><?php
  }

?>
