<!doctype html>
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];

	$query1="select * from pegawai";
	$query2="select * from jabatan";


	$jumlah_pegawai=mysql_num_rows(mysql_query($query1));
	$jumlah_jabatan=mysql_num_rows(mysql_query($query2));
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN - Resto Broto</title>

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
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--primary mdl-color--white mdl-color-text--white-600">
        <div class="mdl-layout__drawer-button"><i class="mdi mdi-menu"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
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
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800"><a class="mdl-navigation__link" href="index.php"><em class="mdi mdi-home"></em>Home</a> <a class="mdl-navigation__link" href="tampil pegawai.php"><em class="mdi mdi-account-multiple"></em>Kelola Pegawai</a> <a class="mdl-navigation__link" href="tampil jabatan.php"><em class="mdi mdi-file"></em>Kelola Jabatan</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
					<style>
					.demo-card-event.mdl-card {
					  width: 256px;
					  height: 256px;
					  background: #3E4EB8;
					}
					.demo-card-event > .mdl-card__actions {
					  border-color: rgba(255, 255, 255, 0.2);
					}
					.demo-card-event > .mdl-card__title {
					  align-items: flex-start;
					}
					.demo-card-event > .mdl-card__title > h4 {
					  margin-top: 0;
					}
					.demo-card-event > .mdl-card__actions {
					  display: flex;
					  box-sizing:border-box;
					  align-items: center;
					}
					.demo-card-event > .mdl-card__title,
					.demo-card-event > .mdl-card__actions,
					.demo-card-event > .mdl-card__actions > .mdl-button {
					  color: #fff;
					}
					</style>

					<div class="demo-card-event mdl-card mdl-shadow--2dp">
						<div class="mdl-card__title mdl-card--expand">
							<h4>
								Welcome<br>
								<?php echo $nama;?><br>

							</h4>
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								RESTO BROTO MANAGEMEN
							</a>
							<div class="mdl-layout-spacer"></div>
							<i class="material-icons"><i class="mdi mdi-account"></i></i>
						</div>
					</div>
					<pre> </pre>

					<div class="demo-card-event mdl-card mdl-shadow--2dp">
					  <div class="mdl-card__title mdl-card--expand">
					    <h4>
					      Jumlah Pegawai:<br>
					      <?php echo $jumlah_pegawai;?><br>
					      Orang
					    </h4>
					  </div>
					  <div class="mdl-card__actions mdl-card--border">
					    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
					      Statistik Pegawai
					    </a>
					    <div class="mdl-layout-spacer"></div>
					    <i class="material-icons"><i class="mdi mdi-account"></i></i>
					  </div>
					</div>
					<pre> </pre>
          </div>
          <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

          </div>
          <div class="demo-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
            <div class="demo-separator mdl-cell--1-col"></div>

          </div>
        </div>
      </main>
    </div>

    <script src="../../js/material.min.js"></script>
  </body>
</html>
