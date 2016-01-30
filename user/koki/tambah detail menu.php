<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];

	$idmenu=$_GET["id"];
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
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="mdi mdi-dots-vertical"></i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
						<li class="mdl-menu__item"><a href="../../koneksi/logout.php">Log Out</a></li>          </ul>
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
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Tambah Menu Komposisi-->
               <form role="form" action="proses tambah detail menu.php?idmenu=<?php echo $idmenu; ?>" method="post" name="postform" enctype="multipart/form-data">
               <h4>Tambah Menu - Komposisi </h4>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <select class="mdl-textfield__input" id="idbahanbaku" name="idbahanbaku">
<?php
 		$query2="select * from bahanbaku";
		$mysql2=mysql_query($query2);
		while($row=mysql_fetch_array($mysql2)){
?>
                    <option value="<?php echo $row['id_bahanbaku']; ?>"><?php echo $row['nama_bahan']; ?></option>
<?php } ?>
                   </select>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="kebutuhan" class="mdl-textfield__label">Jumlah</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="kebutuhan" name="kebutuhan"/>
                   <span class="mdl-textfield__error">Tidak Boleh Huruf</span>
               </div>
               <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Tambah</button>
				<br>
                <br>

<center>
	<table class="mdl-data-table mdl-js-data-table">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Nama Bahan</th>
                  <th class="mdl-data-table__cell--non-numeric">Jumlah</th>
                  <th class="mdl-data-table__cell--non-numeric"></th>
                  </tr>
              </thead>
              <tbody>
<?php
 $query="select d.*,b.nama_bahan from detailmenu d join bahanbaku b on d.id_bahanbaku=b.id_bahanbaku where d.id_menu='$idmenu'";
 $mysql=mysql_query($query);
while($row=mysql_fetch_array($mysql)){
	$id=$row['id_detailmenu'];
?>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row['nama_bahan']; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row['stok']; ?></td>
                  <td><a id="hapus" class="mdl-button mdl-js-button mdl-button--icon" href="proses hapus tambah detail menu.php?id=<?php echo $id;?>&idmenu=<?php echo $idmenu;?>">
                  						  <i class="mdi mdi-delete"></i>
                  						</a>
                  						<div class="mdl-tooltip" for="hapus">
                  							Hapus
                  						</div>
														</td>

					</tr>
	<?php } ?>
					</tbody></table></center>
					<br>
					<a href="tampil menu.php">Simpan</a>
				</form>
				</div>
				</main>
			</div>
		</body>
</html>
