<?php
include('header.php');
$con = mysql_connect("localhost","root","chapstick2012");
if (!con)
{
die('no worky: ' . mysql_error());
}
mysql_select_db("revotrack", $con);

$sql = "INSERT INTO phonebank (phone_id, phone_date, phone_timein, phone_timeout, phone_calls)
VALUES
('$_POST[phone_id]','$_POST[phone_date]','$_POST[phone_timein]','$_POST[phone_timeout]','$_POST[phone_calls]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "<div id='main'><div class='scroll-pane'>";
echo "1 record added<br>";
include('phone_form.php');
echo "</div></div>";

mysql_close($con);
?>
<div class="footer">
<?php include('footer.php'); ?>
</div>