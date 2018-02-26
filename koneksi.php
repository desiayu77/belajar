<?php

// RUBAH SETTINGAN Database disini gan.. //

$h	= "localhost";
$u	= "root";
$p	= "";
$d 	= "sekolahan";

// END RUBAH SETTINGAN Database //


mysql_connect($h, $u, $p) or die (mysql_error());
mysql_select_db($d);

