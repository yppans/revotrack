<?php
include('header.php');
$con = mysql_connect("localhost","root","chapstick2012");
if (!con)
{
die('no worky: ' . mysql_error());
}
mysql_select_db("revotrack", $con);

$sql = "INSERT INTO canvass (cnv_id, cnv_turf, cnv_hours, cnv_date, cnv_knocks, cnv_conv, cnv_yes, cnv_no, cnv_maybe, cnv_signs, cnv_absentee)
VALUES
('$_POST[cnv_id]','$_POST[cnv_turf]','$_POST[cnv_hours]','$_POST[cnv_date]','$_POST[cnv_knocks]','$_POST[cnv_conv]','$_POST[cnv_yes]','$_POST[cnv_no]','$_POST[cnv_maybe]','$_POST[cnv_signs]','$_POST[cnv_absentee]')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "<div id='main'><div class='scroll-pane'>";
echo "1 record added<br>";


mysql_close($con);
?>

<?php
include('canvass_form.php');
?>
</div></div>
<div class="footer">

<?php include('footer.php'); ?>
</div>