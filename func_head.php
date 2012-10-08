<?php
$dbhost = localhost;
$dbuser = root;
$dbpass = chapstick2012;
$maindb = revotrack;
$con = mysql_connect($dbhost,$dbuser,$dbpass);
$connection_string=mysql_select_db($maindb);
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($maindb,$con);

?>