<!doctype html>
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];
	$idmeja = $_GET['id'];
	$query = "SELECT * FROM meja WHERE id_meja = '$idmeja'";
	$mysql = mysql_query($query);
	if ($row = mysql_fetch_array($mysql)) {
		$namameja = $row['nama_meja'];
		$status = $row['status'];
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pelayan - Resto Broto</title>

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
          <span class="mdl-layout-title">Kelola Meja</span>
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
					<li class="mdl-menu__item"><a href="../../koneksi/logout.php">Log Out</a></li>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Tambah pelayan-->
               <form role="form" action="proses edit meja.php?id=<?php echo $idpegawai;?>" method="post" name="postform" enctype="multipart/form-data">
               <h4><center>Edit Meja</center></h4>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="idmeja" class="mdl-textfield__label">Id Meja</label>
                   <input type="text" pattern="[B0-9]*" class="mdl-textfield__input" id="idmeja" name="idmeja" value="<?php echo $idmeja;?>" readonly/>
                   <span class="mdl-textfield__error">Format : MXXX</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="nama" class="mdl-textfield__label">Nama</label>
                   <input type = "text" class="mdl-textfield__input" id="nama" name="nama" value="<?php echo $namameja;?>"/>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="status" class="mdl-textfield__label">Status</label>
                   <select class="mdl-textfield__input" id="status" name="status">
                    <option value="Kosong" <?php if ($status == "Kosong") {echo "selected";} ?>>Kosong</option>
                    <option value="Terisi" <?php if ($status == "Terisi") {echo "selected";} ?>>Terisi</option>
                   </select>
               </div>
               <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">UBAH MEJA</button>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">RESET</button>
           </form>
           <!-- /form tambah pelayan-->
          </div>
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
