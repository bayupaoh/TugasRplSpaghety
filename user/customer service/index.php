<!doctype html>
<!-- PHP in here-->
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];
	
	$query1='SELECT count(id_detailkuesioner) as total FROM detailkuesioner';
	$mysql=mysql_query($query1);
	if($row=mysql_fetch_array($mysql)){
		$total=$row['total'];
	}else{
		$total=0;
	}

	$query2="SELECT count(id_detailkuesioner) as total FROM detailkuesioner where jawaban='Ya'";
	$mysql=mysql_query($query2);
	if($row=mysql_fetch_array($mysql)){
		$totalsetuju=$row['total'];
	}else{
		$totalsetuju=0;
	}
	
	$query3="SELECT count(id_detailkuesioner) as total FROM detailkuesioner where jawaban='Tidak'";
	$mysql=mysql_query($query3);
	if($row=mysql_fetch_array($mysql)){
		$totaltidaksetuju=$row['total'];
	}else{
		$totaltidaksetuju=0;
	}
	?>
<!-- /PHP in here-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUSTOMER - Resto Broto</title>

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
          <span class="mdl-layout-title">Kelola Kuisioner</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="mdi mdi-magnify"></i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" />
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="mdi mdi-dots-vertical"></i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Setting</li>
            <li class="mdl-menu__item">Log Out</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
		  <!-- tampil foto dari database -->
          <img src="../../img/pegawai/<?php echo $foto;?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $nama; ?> <br> <?php echo $jabatan; ?></span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdi mdi-home"></i>Dashboard</a>
          <a class="mdl-navigation__link" href="tampil kuisioner.php"><i class="mdi mdi-credit-card"></i>Kelola Kuesioner</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
				  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		  <h4>Grafik Kepuasan Pelanggan</h4>
		  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		      <div class="circle" id="circles-1"></div>
          
		  <h5><?php echo $totalsetuju; ?> Orang Puas <br> <?php echo $totaltidaksetuju; ?> Tidak Puas</h5>
          </div>
        </div>
      </main>
    </div>
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" style="position: fixed; left: -1000px; height: -1000px;">
        <defs>
          <mask id="piemask" maskContentUnits="objectBoundingBox">
            <circle cx=0.5 cy=0.5 r=0.49 fill="white" />
            <circle cx=0.5 cy=0.5 r=0.40 fill="black" />
          </mask>
          <g id="piechart">
            <circle cx=0.5 cy=0.5 r=0.5 />
            <path d="M 0.5 0.5 0.5 0 A 0.5 0.5 0 0 1 0.95 0.28 z" stroke="none" fill="rgba(255, 255, 255, 0.75)" />
          </g>
        </defs>
      </svg>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
<script type="text/javascript" src="../../js/circles.js"></script>
					         <script>
								var colors = [
										['#f6608a','#3f51b5'], ['#ffffff','#f6608a'], ['#ffffff','#f6608a'], ['#ffffff','#f6608a'], ['#ffffff','#f6608a'], ['#ffffff','#f6608a']		
										];
								for (var i = 1; i <= 6; i++) {
									var angka = 0;
									if(i == 1){
										angka = <?php echo round(($totalsetuju/$total)*100,0,PHP_ROUND_HALF_UP);?>;
									}else if(i == 2){
										angka = 60;
									}else if(i == 3){
										angka = 40;
									}else if(i == 4){
										angka = 70;
									}else if(i == 5){
										angka = 40;
									}else{
										angka = 60;
									}

									var child = document.getElementById('circles-' + i),
										percentage = angka;
										
									Circles.create({
										id:         child.id,
										percentage: percentage,
										radius:     80,
										width:      10,
										number:   	percentage / 1,
										text:       '%',
										colors:     colors[0]
									});
								}
						
				</script>

