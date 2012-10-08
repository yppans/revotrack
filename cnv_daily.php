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
$totals = mysql_query($sql = "SELECT *, (canvass.cnv_knocks / canvass.cnv_hours) AS canvass_kph from canvass, staff WHERE staff.staff_id=canvass.cnv_id ORDER BY `canvass`.`cnv_date` ASC");



$i = 0;

echo "<table class='features-table''>
<thead><tr>
<th>Name</th>
<th>Turf</th>
<th>Date</th>
<th>Hours</th>
<th>Knocks</th>
<th>Conv.</th>
<th>Yes</th>
<th>No</th>
<th>Maybe</th>
<th>Signs</th>
<th>Abs.</th>
<th>KPH</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</td>";
echo "<td>" . $row['cnv_turf'] . "</td>";
echo "<td>" . $row['cnv_date'] . "</td>";
echo "<td>" . $row['cnv_hours'] . "</td>";
echo "<td>" . $row['cnv_knocks'] . "</td>";
echo "<td>" . $row['cnv_conv'] . "</td>";
echo "<td>" . $row['cnv_yes'] . "</td>";
echo "<td>" . $row['cnv_no'] . "</td>";
echo "<td>" . $row['cnv_maybe'] . "</td>";
echo "<td>" . $row['cnv_signs'] . "</td>";
echo "<td>" . $row['cnv_absentee'] . "</td>";
echo "<td>" . $row['canvass_kph'] . "</td>";
echo "</tr></tbody>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>