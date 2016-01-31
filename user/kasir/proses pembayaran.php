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
        ?>
<html>
<head>
        <link rel="stylesheet" href="../../css/material.min.css">
        <link rel="stylesheet" href="../../css/styles.css">
        <link href="../../css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
        <style>
        .demo-card-wide.mdl-card {
          width: 512px;
        }
        .demo-card-wide > .mdl-card__title {
          color: #fff;
          height: 176px;
          background: url('../../img/asset/welcome_card.jpg') center / cover;
        }
        .demo-card-wide > .mdl-card__menu {
          color: #fff;
        }
        </style>


</head>
<body>
<!-- Wide card with share menu button -->
<center>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
  </div>
    <h2 class="mdl-card__title-text"><?php echo $pertanyaan;?></h2>
  <div class="mdl-card__supporting-text">
    Terima kasih atas kunjugan anda. kuesioner yang anda berikan sangat membantu kami.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="proses isi kuesioner.php?setuju=Ya&idpesan=<?php echo $idpesan;?>">
      Setuju
    </a>
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="proses isi kuesioner.php?setuju=Tidak&idpesan=<?php echo $idpesan;?>">
      Tidak Setuju
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>

</div>
</center>
<script src="../../js/material.min.js"></script>
</body>
</html>
      <?php
      }else {
  			?><script>alert('Pembayaran Gagal');history.go(-1);</script><?php
      }
    }else {
      ?><script>alert('Maaf Pembayaran Kurang');history.go(-1);</script><?php
    }

?>
