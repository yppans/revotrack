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
$totals = mysql_query($sql = "SELECT *, (SUM(canvass.cnv_knocks) / SUM(canvass.cnv_hours)) AS canvass_kph, SUM(cnv_conv) AS ind_tot_conv, SUM(cnv_knocks) AS ind_tot_knocks, SUM(cnv_yes) AS ind_tot_yes, SUM(cnv_hours) AS ind_tot_hrs from canvass, staff WHERE staff.staff_id=canvass.cnv_id GROUP BY staff.staff_lastname, staff.staff_firstname ASC");



$i = 0;

echo "<table class='features-table''>
<thead><tr>
<th>Name</th>


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
echo "<td>" . $row['ind_tot_hrs'] . "</td>";
echo "<td>" . $row['ind_tot_knocks'] . "</td>";
echo "<td>" . $row['ind_tot_conv'] . "</td>";
echo "<td>" . $row['ind_tot_yes'] . "</td>";
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