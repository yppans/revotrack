<?php
include('header.php');
?>
<div id="main"><div class="scroll-pane">

 
 <?php
 $con = mysql_connect('localhost', 'root', 'chapstick2012');

 $db =  mysql_select_db('revotrack', $con);

$sql = mysql_query("SELECT *, sum(phone_calls) as call_tot, count(distinct phone_id) as pb_tot, ((sum(phone_calls)) / (count(distinct phone_date))) AS cpd FROM phonebank");


echo "<table class='features-table''>
<thead><tr>
<th colspan='3'>
Phone Bank Totals
</th></tr><tr>
<th>Total Calls</th>
<th>Calls/Day</th>
<th>Staff Total</th>



</tr></thead>";

while ($row = mysql_fetch_array($sql))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['call_tot'] . "</td>";
echo "<td>" . $row['cpd'] . "</td>";
echo "<td>" . $row['pb_tot'] . "</td>";


echo "</tr></tbody>";
}
echo "</table></div>";


?>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>