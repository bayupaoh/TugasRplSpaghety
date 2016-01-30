<?php
  include("../../koneksi/koneksi.php");
  session_start();
  $idpegawai = $_SESSION['id_pegawai'];
  $nama = $_SESSION['nama_pegawai'];
  $jabatan = $_SESSION['nama_jabatan'];
  $foto = $_SESSION['foto'];

  $iddetail=$_GET["iddetail"];
  $idpesanan=$_GET["idpesan"];
  $query="update detailpesanan set status='Sudah'";
  $mysql=mysql_query($query);
  if($mysql){
    ?><script> alert ('Update pesanan berhasil'); </script><?php
    echo '<meta http-equiv="Refresh" content="0; url=detail order.php?id='.$idpesanan.'">';
  }else{
    ?><script> alert ('Update pesanan gagal');history.go(-1);</script><?php
  }
?>
