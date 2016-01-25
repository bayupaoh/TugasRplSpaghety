<html lang="en">
<?php
	include("../../koneksi/koneksi.php");
?>
<!doctype html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resto Broto</title>

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

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="../../css/material.min.css">
    <link rel="stylesheet" href="../../css/styles customer.css">
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
  <body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
          <h3><img src="../../img/asset/Restaurant.png" width="50px" height="50px">Resto Broto</h3>
        </div>
        <div class="mdl-layout--large-screen-only mdl-layout__header-row">
        </div>
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
          <a href="#makanan" class="mdl-layout__tab is-active"><i class="mdi mdi-silverware-variant"></i>Makanan</a>
          <a href="#minuman" class="mdl-layout__tab"><i class="mdi mdi-glass-tulip"></i>Minuman</a>
          <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
            <span class="visuallyhidden"></span>
          </button>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="mdl-layout__tab-panel is-active" id="makanan">
		<?php
		$query="select * from menu where id_kategori='K1'";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){
		?>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <img src="../../img/makanan/<?php echo $row['foto'];?>" width="100%" height="50%">
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4><?php echo $row['nama_menu'];?></h4>
                <H5><?php echo $row['harga'];?></h5>
				<?php echo $row['deskripsi'];?>
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button"><i class="mdi mdi-thumb-up"></i> Recommended</a>
              </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
            </button>
          </section>
		<?php }?>
          <section class="section--footer mdl-color--white mdl-grid">
          </section>
        </div>
        <div class="mdl-layout__tab-panel" id="minuman">
          <?php
		$query="select * from menu where id_kategori='K2'";
		$sql=mysql_query($query);
		while($row=mysql_fetch_array($sql)){
		?>
          <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
            <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
              <img src="../../img/makanan/<?php echo $row['foto'];?>" width="100%" height="50%">
            </header>
            <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
              <div class="mdl-card__supporting-text">
                <h4><?php echo $row['nama_menu'];?></h4>
                <H5><?php echo $row['harga'];?></h5>
				<?php echo $row['deskripsi'];?>
              </div>
              <div class="mdl-card__actions">
                <a href="#" class="mdl-button"><i class="mdi mdi-thumb-up"></i> Recommended</a>
              </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
            </button>
          </section>
		<?php }?>
          <section class="section--footer mdl-color--white mdl-grid">
        </section>
      </div>

      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
