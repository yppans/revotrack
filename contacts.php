<?php
include('header.php');
?>
<div id="main"><div class="scroll-pane">
<?php
$con = mysql_connect("localhost","root","chapstick2012");
if (!$con)
{
die('no work: ' .mysql_error());
}


mysql_select_db("revotrack", $con);
$totals = mysql_query("SELECT staff_id, staff_lastname, staff_firstname, staff_job, staff_dob, staff_address, staff_city, staff_zip, staff_phone, staff_email FROM staff ORDER BY staff_id");
$i = 0;

echo "<table class='features-table'>
<thead><tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</td>";
echo "<td>" . $row['staff_phone'] . "</td>";
echo "<td>" . $row['staff_email'] . "</td>";
echo "</tr></tbody>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>