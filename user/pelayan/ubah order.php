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
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--primary mdl-color--white mdl-color-text--white-600">
        <div class="mdl-layout__drawer-button"><i class="mdi mdi-menu"></i></div>
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Order</span>
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
          <img src="../../img/pegawai/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Bayu Paoh <br> Pelayan</span>
            <div class="mdl-layout-spacer"></div>
          </div>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="index.html"><i class="mdl-color-text--blue-grey-400 mdi mdi-cart" role="presentation"></i>Order</a>
          <a class="mdl-navigation__link" href="tampil report.html"><i class="mdi mdi-archive"></i>Kelola Meja</a>
          <a class="mdl-navigation__link" href="tampil report.html"><i class="mdi mdi-format-list-numbers"></i>Daftar Order</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
          <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
            <!-- Form Tambah Guru-->
            <center>
              <h5>T01 ( Meja1 )</h5>
              <h7>Tanggal : 17 Mei 2017 17:17:17</h7>
	           <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="pertanyaan" class="mdl-textfield__label">Menu</label>
                   <input type = "text" class="mdl-text_input" value="Ayam" />
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Cari</button>
               </div>
	           <br>
               <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                   <label for="telepon" class="mdl-textfield__label">Jumlah</label>
                   <select class="mdl-textfield__input">
                    <option value="P1">1</option>
                    <option value="P1">2</option>
                    <option value="P1">3</option>
                    <option value="P1">4</option>
                    <option value="P1">5</option>
                    <option value="P1">6</option>
                    <option value="P1">7</option>
                    <option value="P1">8</option>
                    <option value="P1">9</option>
                    <option value="P1">10</option>
                   </select>
               </div>
			   <br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">TAMBAH PESANAN</button>			  
			   <table class="mdl-data-table mdl-js-data-table mdl-cell mdl-cell--12-col ">
              <thead>
                <tr>
                  <th class="mdl-data-table__cell--non-numeric">Nama Menu</th>
                  <th class="mdl-data-table__cell--non-numeric">Jumlah</th>
                  <th class="mdl-data-table__cell--non-numeric">Harga Satuan</th>
                  <th class="mdl-data-table__cell--non-numeric">Total</th>
                  <th class="mdl-data-table__cell--non-numeric"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="mdl-data-table__cell--non-numeric">Ayam</td>
                  <td class="mdl-data-table__cell--non-numeric">1</td>
                  <td class="mdl-data-table__cell--non-numeric">Rp.15000</td>
                  <td class="mdl-data-table__cell--non-numeric">Rp.15000</td>
                  <td>
                  						<a id="ubah" class="mdl-button mdl-js-button mdl-button--icon" href="detail.html">
                                <i class="mdi mdi-cash-multiple"></i>
                  						</a>
                  						<div class="mdl-tooltip" for="ubah">
                  							Ubah
                  						</div>
                  						<a id="hapus" class="mdl-button mdl-js-button mdl-button--icon" href="detail.html">
                                <i class="mdi mdi-cash-multiple"></i>
                  						</a>
                  						<div class="mdl-tooltip" for="hapus">
                  							Hapus
                  						</div>
                  					  </td>
									  </tr>

              </tbody>
            </table>
			<h5>Total Harga : Rp.15000</h5>
				<br>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">UBAH</button>
               <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">RESET</button>
            <!-- /form ubah order makan-->
          </div>
        </div>
      </main>
    </div>
    <script src="../../js/material.min.js"></script>
  </body>
</html>
