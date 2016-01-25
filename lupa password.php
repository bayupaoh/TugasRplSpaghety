<html>
  <head>
    <title>Resto Broto</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link rel="stylesheet" href="css/material.min.css" media="screen,projection">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/material.css">
    <link rel="stylesheet" href="css/materialDate.css">
    <link href="css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />

    <script src="libs/moment.min.js"></script>
    <script src="libs/jquery-2.1.3.min.js"></script>
    <script src="libs/knockout-3.2.0.js"></script>
    <script src="material-datepicker/js/material.datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="material-datepicker/css/material.datepicker.css">

  </head>
  <body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/material.min.js"></script>

    <!-- Simple header with scrollable tabs. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <!-- Title -->
          <span class="mdl-layout-title" align="center"><img src="img/asset/Restaurant.png" height="40px" width="40px"/>Resto Broto</span>
        </div>
        <!-- Tabs -->
      </header>

      <main class="mdl-layout__content">
          <div class="page-content"><!-- Your content goes here -->
          <center>
          <form role="form" action="index.php" method="post" name="postform">
                <h4>Lupa Password</h4>
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <label for="user_email" class="mdl-textfield__label">Email</label>
                    <input type="email" class="mdl-textfield__input" id="user_email" name="user_email" />
                </div>
                <br>
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent " type="submit">Submit</button>
                <a href="index.html">Kembali Login</a>
            </form>
          </center>
          </div>
      </main>
    </div>
 </body>
</html>
