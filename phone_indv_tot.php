<?php
include('header.php');
?>
<div id="main">

 
 <?php
 $con = mysql_connect('localhost', 'root', 'chapstick2012');

 $db =  mysql_select_db('revotrack', $con);

$phone_id = $_GET['phone_id'];
$phone_id = mysql_query("
select staff_lastname, staff_firstname, staff_id, phone_id, staff_job, count(distinct phone_date) AS phone_days, ((sum(phone_calls)) / count(distinct phone_date)) AS CPD, sum(phone_calls) AS TCALLS, sum(HOUR(timediff(phone_timein,phone_timeout))) AS phonetime from phonebank, staff where staff_id = '$phone_id' and staff_job = 'phonebank' ORDER BY phone_id
");
$phone_id=mysql_fetch_assoc($phone_id);

echo "<table class='features-table'><thead><th colspan='3'>";
echo "<h1>Phone Bank Individual Detail</h1></th></thead>";
echo "<Tbody><tr><td>";
echo "<b>Name: </td><td>" . $phone_id['staff_firstname'] . " " . $phone_id['staff_lastname'] . "<br>";
echo "</td>";
echo "<td rowspan='2' colspan='2'>";
echo "<img width='129.5' height='86.5' src='images/" . $phone_id['staff_id'] . ".png'>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Contact</b></td><td>" . $phone_id['staff_phone'] . "<br>";
echo "&nbsp" . $phone_id['staff_email'] ."&nbsp";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Total Calls</b>:</td><Td>" . $phone_id['TCALLS'] ."<br>";
echo "</td>";
echo "<td>";
echo "<b>Days Worked</b></td><td colspan='3'>" . $phone_id['phone_days'] ."<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Calls/Day (avg)</b>:</td><Td>" . $phone_id['CPD'] ."<br>";
echo "</td>";
echo "<td>";
echo "<b>Hours Worked</b></td><td colspan='3'>" . $phone_id['phonetime'] ."<br>";
echo "</td></tr>";

echo "</tbody></table>";
echo "<br>";

echo "<br>";

?>
</div>
<div class="footer">
<?php include('footer.php'); ?>
</div>