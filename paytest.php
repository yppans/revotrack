 <?php
 $con = mysql_connect('localhost', 'root', 'chapstick2012');

 $db =  mysql_select_db('revotrack', $con);
$start_date = $_GET['start_date'];
$end_date = $_GET['end_date'];
$payroll = mysql_query("SELECT *, SUM(canvass.cnv_hours) AS pd_hrs FROM staff, canvass WHERE canvass.cnv_date BETWEEN '.$start_date.' AND '.$end_date.'");
$payroll=mysql_fetch_assoc($payroll);
echo "<table border='1' cellspacing='0' width=80%>
<tr>
<th>Last Name</th>
<th>First Name</th>
<th>Paid Hours</th>

</tr>";

while ($payroll = mysql_fetch_array($totals))
{
echo "<tr>";
echo "<td>" . $payroll['canvass.cnv_lastname'] . "</td>";
echo "<td>" . $payroll['cnv_firstname'] . "</td>";
echo "<td>" . $payroll['pd_hrs'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>