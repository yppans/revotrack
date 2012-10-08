<?php
include('header.php');
$con = mysql_connect("localhost","root","chapstick2012");
if (!con)
{
die('no worky: ' . mysql_error());
}
mysql_select_db("revotrack", $con);

$sql = "INSERT INTO absentee (abs_name, abs_address, abs_city, abs_zip, abs_dob, abs_phone, abs_email, abs_reg)
VALUES
('$_POST[abs_name]','$_POST[abs_address]','$_POST[abs_city]','$_POST[abs_zip]','$_POST[abs_dob]','$_POST[abs_phone]','$_POST[abs_email]','$_POST[abs_reg]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "<div id='main'><div class='scroll-pane'>";
echo "1 record added<br>";


mysql_close($con);
?>

<?php
include('abs_form.php');
?>
</div></div>
<div class="footer">

<?php include('footer.php'); ?>
</div>