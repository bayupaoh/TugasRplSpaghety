<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koki - Resto Broto</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link rel="stylesheet" href="../../css/material.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <link href="../../css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
  </head>
  <body onload="setInterval('displayServerTime()', 1000);">
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--primary mdl-color--white mdl-color-text--white-600">
        <div class="mdl-layout__drawer-button"><i class="mdi mdi-menu"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Daftar Pesanan</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
            </label>
            <div class="mdl-textfield__expandable-holder">
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="mdi mdi-dots-vertical"></i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item"><a href="../../koneksi/logout.php">Log Out</a></li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="../../img/pegawai/<?php echo $foto;?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $nama;?> <br> <?php echo $jabatan;?></span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 mdi mdi-format-list-numbers" role="presentation"></i>Kelola Masakan</a>
          <a class="mdl-navigation__link" href="tampil kategori.php"><i class="mdi mdi-archive"></i>Kelola Kategori</a>
          <a class="mdl-navigation__link" href="tampil menu.php"><i class="mdi mdi-cart"></i>Kelola Menu</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
			<h6><?php
        $mydate=getdate(date("U"));
        echo "$mydate[weekday], $mydate[mday] $mydate[month] $mydate[year]  ";
        ?><span id="clock"><?php print date('H:i:s'); ?></span></h6>

          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <center>
            <!-- tabel koki -->
            <table class="mdl-data-table mdl-js-data-table">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">No Transaksi</th>
                  <th class="mdl-data-table__cell--non-numeric">Meja</th>
                  <th class="mdl-data-table__cell--non-numeric">Total menu</th>
                  <th class="mdl-data-table__cell--non-numeric">Status</th>
                  <th class="mdl-data-table__cell--non-numeric">Total Harga</th>
                  <th class="mdl-data-table__cell--non-numeric"></th>
                </tr>
              </thead>
              <tbody>
<?php

$query="select p.*,m.nama_meja from pesanan p join meja m where p.status='Belum' and date(p.tgl_pesanan)=date(now());";
$mysql=mysql_query($query);
while($row=mysql_fetch_array($mysql)){
	$nopes=$row['no_pesanan'];
	$query2="select no_pesanan,count(no_pesanan) as jumlah from detailpesanan group by no_pesanan where no_pesanan='$nopes'";
	$mysql2=mysql_query($query2);

	if($item=mysql_fetch_array($query2)){
			$jumlahitem=$item["jumlah"];
	}

?>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row["no_pesanan"]; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row["nama_meja"]; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $jumlahitem; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row["total_harga"]; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row["status"]; ?></td>
									<td>
										<a id="detail order.php?id=<?php echo $row["no_pesanan"];?>" class="mdl-button mdl-js-button mdl-button--icon" href="detail pesanan.php?id=<?php echo $row["no_pesanan"]; ?>"><em class="mdi mdi-tooltip-edit"></em> </a>
                    <div class="mdl-tooltip" for="detail">
                    Detail
                    </div>
									</td>
								</tr>
<?php } ?>
              </tbody>
            </table>
            <!--/ tabel koki -->
          </center>
          </div>

        </div>
       </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
