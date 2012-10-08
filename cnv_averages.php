 
 
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
$totals = mysql_query($sql = "select count(distinct cnv_date) AS cnv_days, count(distinct cnv_id) AS cnv_tot, ((sum(cnv_knocks)) / (count(distinct cnv_id))) AS KPC, ((sum(cnv_knocks)) / (count(distinct cnv_date))) AS KPD, ((sum(cnv_yes)) / (count(distinct cnv_date))) AS YPD, ((sum(cnv_knocks)) / (sum(cnv_hours))) AS KPH, ((sum(cnv_yes)) / (sum(cnv_hours))) AS YPH, ((sum(cnv_conv)) / (sum(cnv_hours))) AS COPH from canvass");



$i = 0;

echo "<table class='features-table'>
<thead><tr>
<th colspan='3'>
Phone Bank Averages
</th></tr><tr>
<th>KPH</th>
<th>YPH</th>
<th>CPH</th>


</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['KPH'] . "</td>";
echo "<td>" . $row['YPH'] . "</td>";
echo "<td>" . $row['COPH'] . "</td>";
echo "</tr>
<thead><tr>
<th>KPC</th>
<th>KPD</th>
<th>YPD</th>
</tr></thead>";
echo "<Td>" . $row['KPC'] . "</td>";
echo "<Td>" . $row['KPD'] . "</td>";
echo "<Td>" . $row['YPD'] . "</td>";
echo "</tr></tbody>";
echo "<tr><td colspan='3'>
<b><center>Legend:</center></b>
<i>KPH</i> - Knocks Per Hour<br> <i>YPH</i> - Yes Per Hour<br> <i>CPH</i> - Conversations Per Hour<br>
<i>CPD</i> - Knocks Per Canvasser<br> <i>KPD</i> - Knocks Per Day<br> <i>YPD</i> - Yes Per Day
</td></tr>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>