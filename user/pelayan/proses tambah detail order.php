<?php
  include("../../koneksi/koneksi.php");
  session_start();
  $idpegawai = $_SESSION['id_pegawai'];
  $nama = $_SESSION['nama_pegawai'];
  $jabatan = $_SESSION['nama_jabatan'];
  $foto = $_SESSION['foto'];

  $idmeja = $_GET['idmeja'];
  $nopesanan = $_GET['nopesanan'];

  $idmenu=$_POST['menu'];
  $jumlah=$_POST['jumlah'];
  $querytampilharga="select * from menu where id_menu='$idmenu'";
  $mysql=mysql_query($querytampilharga);
  while($row=mysql_fetch_array($mysql)){
    $harga=$row["harga"];
  }

  $query1="insert into detailpesanan values(null,'$nopesanan','$idmenu',$jumlah,'Tidak')";
  echo $query1;
  $mysql1=mysql_query($query1);
  if($mysql1){
    $query2="update pesanan set total_harga=total_harga+($jumlah*$harga) where no_pesanan='$nopesanan'";
    $mysql2=mysql_query($query2);
    echo $query2;
    if($mysql2){
      $query3="select * from detailmenu where id_menu='$idmenu'";
      $mysql3=mysql_query($query3);
      $hasil='f';
      while($row=mysql_fetch_array($mysql3)){
          $idbahanbaku = $row['bahanbaku'];
          $kebutuhan = $row['stok'];
          $query4="update bahanbaku set stok=stok-($kebutuhan*$jumlah) where id_bahanbaku='$idbahanbaku'";
          $mysql4=mysql_query($query4);
          echo $query4;
          if($mysql4){
            $hasil='t';
          }else{
            $hasil='f';
          }
      }

      if($hasil == 't'){
        echo '<meta http-equiv="Refresh" content="0; url=pesan order.php?idmeja='.$idmeja.'&idpesan='.$nopesanan.'">';
      }
    }else{
      ?><script> alert ('Tambah detail pesanan error');history.go(-1);</script><?php
    }
  }else{
    ?><script> alert ('Tambah detail pesanan error');history.go(-1);</script><?php
  }
?>
