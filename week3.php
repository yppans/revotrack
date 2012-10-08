<?php
$con = mysql_connect("localhost","root","chapstick2012");
if (!$con)
{
die('no work: ' .mysql_error());
}
mysql_select_db("revotrack", $con);
$totals = mysql_query($sql = "
SELECT 
SUM(cnv_knocks) as TK_wk2, 
SUM(cnv_hours) as TH_wk2,
SUM(cnv_conv) as TC_wk2,
SUM(cnv_yes) as TY_wk2,
SUM(cnv_no) as TN_wk2,
SUM(cnv_maybe) as TM_wk2,
(SUM(cnv_knocks)) / (SUM(cnv_hours)) as KPH_wk2,
(SUM(cnv_yes)) / (SUM(cnv_hours)) as YPH_wk2
FROM `canvass` 
WHERE cnv_date 
BETWEEN '2012-09-16' AND '2012-09-22'");

echo "<table class='features-table'>
<thead><tr>
<th>Hours</th>
<th>Knocks</th>
<th>Conv.</th>
<th>Yes</th>
<th>No</th>
<th>Maybe</th>
<th>KPH</th>
<th>YPH</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['TH_wk2'] . "</td>";
echo "<td>" . $row['TK_wk2'] . "</td>";
echo "<td>" . $row['TC_wk2'] . "</td>";
echo "<td>" . $row['TY_wk2'] . "</td>";
echo "<td>" . $row['TN_wk2'] . "</td>";
echo "<td>" . $row['TM_wk2'] . "</td>";
echo "<td>" . $row['KPH_wk2'] . "</td>";
echo "<td>" . $row['YPH_wk2'] . "</td>";
echo "</tr></tbody>";
}
echo "</table>";
?>