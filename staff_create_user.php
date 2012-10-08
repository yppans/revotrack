<?php
include('header.php');
?>
<?php
$con = mysql_connect("localhost","root","chapstick2012");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("revotrack", $con);

$sql="INSERT INTO staff (staff_level, staff_user, staff_passwd, staff_lastname, staff_firstname, staff_job, staff_dob, staff_address, staff_city, staff_zip, staff_phone, staff_email)
VALUES
('$_POST[staff_level]','$_POST[staff_user]','".md5($_POST['staff_passwd'])."','$_POST[staff_lastname]','$_POST[staff_firstname]','$_POST[staff_job]','$_POST[staff_dob]','$_POST[staff_address]','$_POST[staff_city]','$_POST[staff_zip]','$_POST[staff_phone]','$_POST[staff_email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<div id='main'><div class='scroll-pane'>";
echo "1 record added";
echo "</div></div>";
mysql_close($con);
?>
<div class="footer">
<?php include('footer.php'); ?>
</div>