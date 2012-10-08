

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
$totals = mysql_query($sql = "SELECT staff_lastname, staff_firstname, cnv_date, SUM(cnv_hours) AS pd_hrs FROM canvass, staff WHERE (cnv_date >=  '2012-09-16' AND cnv_date <=  '2012-09-22') AND cnv_id = staff_id GROUP BY staff_lastname ORDER BY staff_lastname ASC");
include('includes/paydateranges.php');
echo "<table class='features-table'>
<thead><tr>
<th>Name</th>
<th>Paid Hours</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['staff_lastname'] . ", "  . $row['staff_firstname'] . "</td>";
echo "<td>" . $row['pd_hrs'] . "</td>";

echo "</tr></tbody>";
}
echo "</table>";
?>

</div></div>
<div class="footer">
<?php include('footer.php'); ?></div>