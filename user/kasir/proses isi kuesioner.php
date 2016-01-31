<?php
  $hasil=$_GET["setuju"];
  $idpesan=$_GET["idpesan"];

  $sql="insert into detailkuesioner values(null,'K1','$idpesan','$hasil')";
  echo $sql;
  $mysql=mysql_query($sql);
  if($mysql){
    ?><script>alert('Terima Kasih');</script><?php
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
  }else{
    ?><script>alert('Pengisian kuesioner gagal');history.go(-1);</script><?php
  }
 ?>
