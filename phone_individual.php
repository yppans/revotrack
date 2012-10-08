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
$totals = mysql_query($sql = "SELECT * from phonebank, staff WHERE staff.staff_id=phonebank.phone_id ORDER BY `phonebank`.`phone_date` ASC");



$i = 0;

echo "<table class='features-table''>
<thead><tr>
<th>Name</th>


<th>Date</th>
<th>Time In</th>
<th>Time Out</th>
<th>Calls</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td><a href='phone_indv_tot.php?phone_id=" . $row['staff_id'] . "'>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</a></td>";

echo "<td>" . $row['phone_date'] . "</td>";
echo "<td>" . $row['phone_timein'] . "</td>";
echo "<td>" . $row['phone_timeout'] . "</td>";
echo "<td>" . $row['phone_calls'] . "</td>";

echo "</tr></tbody>";
}
echo "</table></div>";
?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>