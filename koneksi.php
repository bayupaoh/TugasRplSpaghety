<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "rpl_broto";
$koneksi = mysql_connect($host,$user,$pass);
mysql_select_db($database)
or die ("Connection failed".mysql_error());
error_reporting(E_ALL^(E_NOTICE | E_WARNING));	`
?>