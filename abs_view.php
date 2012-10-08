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
$totals = mysql_query("SELECT * from absentee ORDER BY abs_id");
$i = 0;

echo "<table class='features-table''>
<thead><tr>
<th>Name</th>
<th>DOB</th>
<th>Address</th>
<th>Email</th>
<th>Phone</th>
<th>Registration</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['abs_name'] . "</td>";
echo "<td>" . $row['abs_dob'] . "</td>";
echo "<td>" . $row['abs_address'] . "<br>"  . $row['abs_city'] . "<br>" . $row['abs_zip'] . "</td>";
echo "<td>" . $row['abs_email'] . "</td>";
echo "<td>" . $row['abs_phone'] . "</td>";
echo "<td>" . $row['abs_reg'] . "</td>";
echo "</tr></tbody>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>