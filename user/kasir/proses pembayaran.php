<?php
    include("../../koneksi/koneksi.php");
    session_start();

    $idpegawai = $_SESSION['id_pegawai'];
    $idpesan= $_GET["idpesan"];
    $uangbayar=$_POST["total_bayar"];
    $total=$_POST["total_harga"];

    if($uangbayar >= $total){
      $kembali=$uangbayar-$total;

      $sql1="update pesanan set status='Bayar',id_pegawai='$idpegawai',uang_bayar='$uangbayar',kembali='$kembali' where no_pesanan='$idpesan'";
      $mysql1=mysql_query($sql1);
      if($mysql1){
        $sql2="select * from kuesioner";
        $mysql2=mysql_query($sql2);
        if($row=mysql_fetch_array($mysql2)){
          $pertanyaan=$row["pertanyaan"];
        }
        #buat code untuk isi kuesioner, dan samungkan ke proses isi kuesioner (proses isi kuesioner.php?setuju=Ya&idpesan=$idpesan /  isi kuesioner.php?setuju=Tidak&idpesan=$idpesan)
      }else {
  			?><script>alert('Pembayaran Gagal');history.go(-1);</script><?php
      }
    }else {
      ?><script>alert('Maaf Pembayaran Kurang');history.go(-1);</script><?php
    }

?>
