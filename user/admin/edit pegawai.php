<!doctype html>
<?php
	include("../../koneksi/koneksi.php");
	session_start();
	$idpegawai = $_SESSION['id_pegawai'];
	$nama = $_SESSION['nama_pegawai'];
	$jabatan = $_SESSION['nama_jabatan'];
	$foto = $_SESSION['foto'];
	
	$id = $_GET['id'];
	$query = "SELECT * FROM pegawai WHERE id_pegawai = '$id'";
	$mysql = mysql_query($query);
	if ($row = mysql_fetch_array($mysql)) {
		$namapegawai = explode(" ",$row['nama_pegawai']);
		$alamat = $row['alamat'];
		$tempatlahir = $row['tempat_lahir'];
		$tanggallahir = $row['tanggal_lahir'];
		$jk = $row['jk'];
		$telp = $row['telp'];
		$email = $row['email'];
		$fotopegawai = $row['foto'];
		$idjabatan = $row['id_jabatan'];
	}

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
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.php"><i class="mdi mdi-home"></i>Home</a>
          <a class="mdl-navigation__link" href="tampil pegawai.php"><i class="mdi mdi-account-multiple"></i>Kelola Pegawai</a>
          <a class="mdl-navigation__link" href="tampil jabatan.php"><i class="mdi mdi-file"></i>Kelola Jabatan</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
               <form role="form" action="proses edit pegawai.php" method="post" name="postform" enctype="multipart/form-data">
               <h4>Edit Pegawai</h4>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="nip" class="mdl-textfield__label">NIP</label>
                   <input type="text" pattern="[P0-9]*" class="mdl-textfield__input" id="nip" name="nip" value="<?php echo $id;?>" readonly/>
                   <span class="mdl-textfield__error">Format : PJXXX</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="namadepan" class="mdl-textfield__label">Nama Depan</label>
                   <input type="text" pattern="[A-Za-z]*" class="mdl-textfield__input" id="namadepan" name="namadepan" value="<?php echo $namapegawai[0];?>" />
                   <span class="mdl-textfield__error">Tidak boleh berupa angka atau simbol</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="namabelakang" class="mdl-textfield__label">Nama Belakang</label>
                   <input type="text" pattern="[A-Za-z]*" class="mdl-textfield__input" id="namabelakang" name="namabelakang" value="<?php echo $namapegawai[1];?>"/>
                   <span class="mdl-textfield__error">Tidak boleh berupa angka atau simbol</span>
               </div>
               <br>
               <label for="option-1" class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                   <input type="radio" name="jk" value="Pria" class="mdl-radio__button" id="option-1" <?php if($jk=="Pria"){echo "checked";}?>/>
                   <span class="mdl-radio__label"> Pria </span>
               </label>

               <label for="option-2" class="mdl-radio mdl-js-radio mdl-js-ripple-effect">
                   <input type="radio" name="jk" value="Wanita" class="mdl-radio__button" id="option-2" <?php if($jk=="Wanita"){echo "checked";}?> />
                   <span class="mdl-radio__label"> Wanita</span>
               </label>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="tempatlahir" class="mdl-textfield__label">Tempat Lahir</label>
                   <input type="text" pattern="[A-Za-z]*" class="mdl-textfield__input" id="tempatlahir" name="tempatlahir" value="<?php echo $tempatlahir;?>"/>
                   <span class="mdl-textfield__error">Tidak boleh berupa angka atau simbol</span>
               </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                   <label >Tanggal Lahir</label>
                   <input type="date" class="mdl-textfield__input" id="tanggallahir" name="tanggallahir" value="<?php echo $tanggallahir;?>"/>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="email" class="mdl-textfield__label">Email</label>
                   <input type="email" class="mdl-textfield__input" id="email" name="email" value="<?php echo $email;?>"/>
               </div>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="password" class="mdl-textfield__label">Password</label>
                   <input type="password"  class="mdl-textfield__input" id="password" name="password" />
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="alamat" class="mdl-textfield__label">Alamat</label>
                   <textarea class="mdl-textfield__input" id="alamat" name="alamat"><?php echo $alamat;?></textarea>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="telepon" class="mdl-textfield__label">No Telp</label>
                   <input type="text" pattern="[0-9]*" class="mdl-textfield__input" id="telepon" name="telepon" value="<?php echo $telp;?>"/>
                   <span class="mdl-textfield__error">Masukan hanya berupa angka</span>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="telepon" class="mdl-textfield__label">Jabatan</label>
                   <select class="mdl-textfield__input" id="jabatan" name="jabatan">
                   <?php
						$queryjabatan = "SELECT * FROM jabatan";
						$mysql = mysql_query($queryjabatan);
						while($row = mysql_fetch_array($mysql)){
					?>
                    <option value="<?php echo $row['id_jabatan'];?>" <?php if($row['id_jabatan']==$idjabatan){echo "selected";}?> ><?php echo $row['nama_jabatan'];?></option>
                    <?php
						}
			  		?>
                   </select>
               </div>
               <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label >Masukan Foto (JPG atau PNG)</label>
                   <input type="file" class="mdl-textfield__input" name="file" id="file" value="Masukan Foto PNG atau JPEG" />
               </div>
               <br>

               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Edit Pegawai</button>

           </form>

           <!-- /form tambah guru-->
          </div>
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
