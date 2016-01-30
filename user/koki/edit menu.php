<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];

  $idmenu=$_GET['id'];

  $query="select * from menu where id_menu='$idmenu'";
  $mysql=mysql_query($query);
  while( $row=mysql_fetch_array($mysql)){
      $idkategori=$row["id_kategori"];
      $namamenu=$row["nama_menu"];
      $harga=$row["harga"];
      $stok=$row["stok"];
      $diskon=$row["diskon"];
			$deskripsi=$row["deskripsi"];
  }
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
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--primary mdl-color--white mdl-color-text--white-600">
        <div class="mdl-layout__drawer-button"><i class="mdi mdi-menu"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Kelola Menu</span>
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
          <a class="mdl-navigation__link" href="tampil menu.php"><i class="mdi mdi-cart"></i>Kelola Menu</a>          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Tambah Guru-->
               <form role="form" action="proses edit menu.php" method="post" name="postform" enctype="multipart/form-data">
               <h4>Edit Menu</h4>
			 				 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="idkategori" class="mdl-textfield__label">Kategori</label>
                   <select class="mdl-textfield__input" id="idkategori" name="idkategori">
<?php
	$query="select * from kategori";
	$mysql=mysql_query($query);
	while($row=mysql_fetch_array($mysql)){
?>
                    <option value="<?php echo $row['id_kategori'];?>" <?php if( $row['id_kategori'] == $idkategori){ echo "selected";} ?> > <?php echo $row['nama_kategori'];?></option>
<?php } ?>
                   </select>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="idmenu" class="mdl-textfield__label">Id Menu</label>
                   <input type="text" pattern="[M0-9]*" class="mdl-textfield__input" id="idmenu" name="idmenu" value="<?php echo $idmenu; ?>" readonly/>
                   <span class="mdl-textfield__error">Format MXXX</span>
               </div>
               <br>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="namamenu" class="mdl-textfield__label">Nama Menu</label>
                   <input type="text" pattern="[A-Z a-z]*" class="mdl-textfield__input" id="namamenu" name="namamenu" value="<?php echo $namamenu; ?>"/>
                   <span class="mdl-textfield__error">Masukan harus berupa angka</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="harga" class="mdl-textfield__label">Harga</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="harga" name="harga" value="<?php echo $harga; ?>"/>
									 <span class="mdl-textfield__error">Masukan harus berupa angka</span>
							</div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="diskon" class="mdl-textfield__label">Diskon</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="diskon" name="diskon" value="<?php echo $diskon; ?>"/>
									 <span class="mdl-textfield__error">Masukan berupa angka 0-100</span>
							</div>
<br>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="stok" class="mdl-textfield__label">Stok</label>
									<input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="stok" name="stok" value="<?php echo $stok; ?>"/>
									<span class="mdl-textfield__error">Masukan berupa angka</span>
							</div>
<br>
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<label for="deskripsi" class="mdl-textfield__label">Deskripsi</label>
									<textarea class="mdl-textfield__input" id="deskripsi" name="deskripsi" ><?php echo $deskripsi; ?></textarea>
							</div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label >Masukan Foto (JPG atau PNG)</label>
                   <input type="file" class="mdl-textfield__input" name="file" id="file" value="Masukan Foto PNG atau JPEG" />
               </div>
               <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Lanjutkan</button>
           </form>

           <!-- /form tambah guru-->
          </div>
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
