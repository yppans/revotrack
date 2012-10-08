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
$totals = mysql_query($sql = "select staff_lastname, staff_firstname, phone_id, (sum(phone_calls)) / (sum((HOUR(timediff(phone_timein,phone_timeout))))) as CPH,  (sum(HOUR(timediff(phone_timein,phone_timeout)))) as hours, sum(phone_calls) as TCALLS, ((sum(phone_calls)) / (count(distinct phone_date))) AS CPD, (count(distinct phone_date)) AS phone_days FROM `phonebank`, staff where phone_id = staff_id GROUP BY staff_lastname");



$i = 0;

echo "<table class='features-table''>
<thead><tr>
<th>Name</th>
<th>Calls/Hr</th>
<th>Calls/Day</th>
<th>Total Calls</th>
<th>Total Days</th>
<th>Total Hours</th>

</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</td>";
echo "<td>" . $row['CPH'] . "</td>";
echo "<td>" . $row['CPD'] . "</td>";
echo "<td>" . $row['TCALLS'] . "</td>";
echo "<td>" . $row['phone_days'] . "</td>";
echo "<td>" . $row['hours'] . "</td>";

echo "</tr></tbody>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>