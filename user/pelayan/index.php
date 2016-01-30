<!doctype html>
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
	<style>
.demo-card-square.mdl-card {
  width: 200px;
  height: 220px;
  padding : 6px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
	align : center;
}
#terisi {
  color: #fff;
  background:
   bottom right 15%no-repeat #ff0000;
	
}
</style>

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
          <img src="../../img/pegawai/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Bayu Paoh <br> Pelayan</span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.html"><i class="mdi mdi-cart"></i>Order</a>
          <a class="mdl-navigation__link" href="tampil meja.html"><i class="mdi mdi-archive"></i>Kelola Meja</a>
          <a class="mdl-navigation__link" href="tampil order.html"><i class="mdi mdi-format-list-numbers"></i>Daftar Order</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Order Pelayan-->
			<div class="demo-card-square mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title mdl-card--expand">
			   <center> <h2 class="mdl-card__title-text">Meja 1</h2></center>
			  </div>
			  <div class="mdl-card__supporting-text">
				Kosong
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			  <center>
				<a href="pesan order.html"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				  Order
				</a>
				</center>
			  </div>
			</div>  
			<div class="demo-card-square mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title mdl-card--expand" id="terisi">
			   <center> <h2 class="mdl-card__title-text">Meja 2</h2></center>
			  </div>
			  <div class="mdl-card__supporting-text">
				Terisi
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			  <center>
				<a href="pesan order.html"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" disabled>
				  Order
				</a>
				</center>
			  </div>
          </div>
			<div class="demo-card-square mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title mdl-card--expand">
			   <center> <h2 class="mdl-card__title-text">Meja 3</h2></center>
			  </div>
			  <div class="mdl-card__supporting-text">
				Kosong
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			  <center>
				<a href="pesan order.html"class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				  Order
				</a>
				</center>
			  </div>
			</div>  
			<div class="demo-card-square mdl-card mdl-shadow--2dp">
			  <div class="mdl-card__title mdl-card--expand">
			   <center> <h2 class="mdl-card__title-text">Meja 4</h2></center>
			  </div>
			  <div class="mdl-card__supporting-text">
				Kosong
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
			  <center>
				<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				  Order
				</a>
				</center>
			  </div>
			</div>  
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
