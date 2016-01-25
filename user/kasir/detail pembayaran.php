<!doctype html>
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];
	$no_pesanan=$_GET['nopesanan'];

	$query1="select p.*,m.nama_meja from pesanan p join meja m on p.id_meja=m.id_meja where p.no_pesanan='$no_pesanan'";
	$mysql1=mysql_query($query1);
	while($row=mysql_fetch_array($mysql1)){
		$tgl=$row['tgl_pesanan'];
		$totalharg=$row['total_harga'];
		$nama_meja=$row['nama_meja'];
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Resto Broto Cook-Eat-Sleep">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kasir - Resto Broto</title>

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
	    <script type="text/javascript" src="../../js/login_effect.js"></script>
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
          <span class="mdl-layout-title">Pembayaran</span>
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
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Setting</li>
            <li class="mdl-menu__item">Log Out</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="../../img/pegawai/<?php echo $foto; ?>" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span><?php echo $nama; ?> <br> <?php echo $jabatan; ?></span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdl-color-text--blue-grey-400 mdi mdi-cash" role="presentation"></i>Pembayaran</a>
          <a class="mdl-navigation__link" href="tampil report.php"><i class="mdi mdi-file-multiple"></i>Report</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- tabel pegawai -->
			<h3><?php echo $no_pesanan;?></h3>
			<h5><?php echo $tgl_pesanan;?></h5>
			<h5><?php echo $nama_meja;?></h5>

            <table class="mdl-data-table mdl-js-data-table">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Menu</th>
                  <th class="mdl-data-table__cell--non-numeric">Harga Satuan</th>
                  <th class="mdl-data-table__cell--non-numeric">Jumlah</th>
                  <th class="mdl-data-table__cell--non-numeric">Total Harga Satuan</th>
                </tr>
              </thead>
              <tbody>
			  <?php
			  $query="select d.*,m.* FROM detailpesanan d join menu m on d.id_menu=m.id_menu WHERE d.no_pesanan='$no_pesanan'";
			  $sql=mysql_query($query);
			   while($row=mysql_fetch_array($sql)){
			  ?>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row['nama_menu']; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $hargasatuan=$row['harga']-($row['harga']*$row['diskon']); ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $row['jumlah']; ?></td>
                  <td class="mdl-data-table__cell--non-numeric"><?php echo $hargasatuan*$row['jumlah']; ?></td>
                </tr>
			  <?php }?>
              </tbody>
            </table>
            <!--/ tabel pegawai -->
			<!-- Form Tambah Jabatan-->
               <form role="form" action="proses pembayaran.php?idpesan=<?php echo $no_pesanan; ?>" method="post" name="postform" enctype="multipart/form-data">
								 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								 		<label for="total_harga" class="mdl-textfield__label">Total Harga Rp.</label>
								 		<input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="total_harga" name="total_harga" value="<?php echo $total_harga; ?>" readonly />
								 		<span class="mdl-textfield__error">Format harus angka</span>
								 </div>
								 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	                   <label for="total_bayar" class="mdl-textfield__label">Uang Bayar Rp.</label>
	                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="total_bayar" name="total_bayar" />
	                   <span class="mdl-textfield__error">Format harus angka</span>
	               </div>
               <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Bayar</button>
           </form>
           <!-- /form tambah pegawai-->
          </div>

        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
	</body>
</html>
