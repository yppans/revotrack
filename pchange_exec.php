<?php
$con = mysql_connect("localhost","root","chapstick2012");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("revotrack", $con);
$sql="UPDATE revotrack.staff SET staff_passwd = '".md5($_POST['staff_passwd'])."' WHERE staff.staff_id = '$_POST[cnv_id]'";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<div id='main'>";
echo "1 record added";
echo "</div>";
mysql_close($con);
?>