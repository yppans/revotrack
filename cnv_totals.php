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
$totals = mysql_query($sql = 
"SELECT *, 
SUM(cnv_signs) AS cnv_tot_signs, 
SUM(cnv_absentee) AS cnv_tot_abs, 
SUM(cnv_no) AS cnv_tot_no, 
SUM(cnv_maybe) AS cnv_tot_maybe, 
SUM(cnv_conv) AS cnv_tot_conv, 
SUM(cnv_knocks) AS cnv_tot_knocks, 
SUM(cnv_yes) AS cnv_tot_yes, 
SUM(cnv_hours) AS cnv_tot_hrs 
FROM canvass");



$i = 0;

echo "<table class='features-table'>
<thead><tr>
<th>Hours</th>
<th>Knocks</th>
<th>Conv.</th>
<th>Yes</th>
<th>No</th>
<th>Maybe</th>
<th>Signs</th>
<th>Abs.</th>
</tr></thead>";

while ($row = mysql_fetch_array($totals))
{
$x++; 

$class = ($x%2 == 0)? '.whiteBackground': '.graybackground';
echo "<tbody><tr class='$class'>";
echo "<td>" . $row['cnv_tot_hrs'] . "</td>";
echo "<td>" . $row['cnv_tot_knocks'] . "</td>";
echo "<td>" . $row['cnv_tot_conv'] . "</td>";
echo "<td>" . $row['cnv_tot_yes'] . "</td>";
echo "<td>" . $row['cnv_tot_no'] . "</td>";
echo "<td>" . $row['cnv_tot_maybe'] . "</td>";
echo "<td>" . $row['cnv_tot_signs'] . "</td>";
echo "<td>" . $row['cnv_tot_absentee'] . "</td>";
echo "</tr></tbody>";
}
echo "</table>";
?><center>
<ul id="countrytabs" class="shadetabs">
<li><a href="week1.php" rel="countrycontainer" class="selected">Week 1</a></li>
<li><a href="week2.php" rel="countrycontainer">Week 2</a></li>
<li><a href="week3.php" rel="countrycontainer">Week 3</a></li>
<li><a href="week4.php" rel="countrycontainer">Week 4</a></li>
<li><a href="week5.php" rel="countrycontainer">Week 5</a></li>
<li><a href="week6.php" rel="countrycontainer">Week 6</a></li>
<li><a href="week7.php" rel="countrycontainer">Week 7</a></li>
</ul>
<div id="countrydivcontainer" style="border:0px solid gray; width:450px; margin-bottom: 1em; padding: 10px">
<script type="text/javascript">
var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()
</script>
</div></div></center></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>