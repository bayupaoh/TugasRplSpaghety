<!doctype html>
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$id_jabatan = $_SESSION['idjabatan'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];
	
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pantry - Resto Broto</title>

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
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--primary mdl-color--white mdl-color-text--white-600">
        <div class="mdl-layout__drawer-button"><i class="mdi mdi-menu"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Tambah Bahan Baku</span>
          <div class="mdl-layout-spacer"></div>
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
          <img src="../../img/pegawai/<?php echo $foto;?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $nama;?> <br> <?php echo $jabatan;?></span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdi mdi-home"></i>Dasboard</a>
          <a class="mdl-navigation__link" href="tampil bahan baku.php"><i class="mdi mdi-pig"></i>Kelola Bahan Baku</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Tambah Jabatan-->
               <form role="form" action="proses tambah bahan baku.php?id=<?php echo $idpegawai;?>" method="post" name="postform" enctype="multipart/form-data">
               <h4>Form Tambah Bahan Baku</h4>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="idbahanbaku" class="mdl-textfield__label">Id Bahan</label>
                   <input type="text" pattern="[B0-9]*" class="mdl-textfield__input" id="idbahanbaku" name="idbahanbaku" />
                   <span class="mdl-textfield__error">Format : BXXX</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="namabahanbaku" class="mdl-textfield__label">Nama bahan baku</label>
                   <input type="text" pattern="[A-Z a-z]*" class="mdl-textfield__input" id="namabahanbaku" name="namabahanbaku" />
                   <span class="mdl-textfield__error">Tidak boleh berupa angka atau simbol</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="satuanbahanbaku" class="mdl-textfield__label">satuan bahan baku</label>
                   <input type="text" pattern="[A-Z a-z]*" class="mdl-textfield__input" id="satuanbahanbaku" name="satuanbahanbaku" />
                   <span class="mdl-textfield__error">Tidak boleh berupa huruf atau simbol</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="stokbahanbaku" class="mdl-textfield__label">stok bahan baku</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="stokbahanbaku" name="stokbahanbaku" />
                   <span class="mdl-textfield__error">Tidak boleh berupa huruf atau simbol</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="stokminbahanbaku" class="mdl-textfield__label">stok min bahan baku</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="stokminbahanbaku" name="stokminbahanbaku" />
                   <span class="mdl-textfield__error">Tidak boleh berupa huruf atau simbol</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                  <label >Tanggal Masuk</label>
                  <input type="date" class="mdl-textfield__input" id="tanggalmasuk" name="tanggalmasuk"/>
              </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                  <label >Tanggal Kadaluarsa</label>
                  <input type="date" class="mdl-textfield__input" id="tanggalkadaluarsa" name="tanggalkadaluarsa"/>
              </div>
               <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Tambah Bahan Baku</button>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="reset">Reset</button>
           </form>
           <!-- /form tambah pegawai-->
          </div>
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
