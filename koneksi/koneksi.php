<?php
$host = "ap-cdbr-azure-southeast-a.cloudapp.ne";
$user = "bda82cf9d10c44";
$pass = "da2efa4e";
$database = "rpl_broto";
$koneksi = mysql_connect($host,$user,$pass);
mysql_select_db($database)
or die ("Connection failed : ".mysql_error());

?>
