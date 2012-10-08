<?php
include('header.php');
?>
<div id="main">

 
 <?php
 $con = mysql_connect('localhost', 'root', 'chapstick2012');

 $db =  mysql_select_db('revotrack', $con);

$staff_id = $_GET['staff_id'];
$staff_id = mysql_query("SELECT * FROM staff WHERE staff_id = '$staff_id'");
$staff_id=mysql_fetch_assoc($staff_id);

echo "<table class='features-table'><thead><th colspan='3'>";
echo "<h1>User Info</h1></th></thead>";
echo "<Tbody><tr><td>";
echo "<b>Name: </td><td>" . $staff_id['staff_firstname'] . " " . $staff_id['staff_lastname'] . "<br>";
echo "</td>";
echo "<td rowspan='2'>";
echo "<img src='images/" . $staff_id['staff_id'] . ".png'>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>D.O.B.</b></td><td>" . $staff_id['staff_dob'] ."<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Phone</b></td><td colspan='3'>" . $staff_id['staff_phone'] ."<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Email</b></td><td colspan='3'>" . $staff_id['staff_email'] ."<br>";
echo "</td></tr>";
echo "<tr><td>";
echo "<b>Address</b></td><td colspan='3'>" . $staff_id['staff_address'] ."<br>";
echo "". $staff_id['staff_city'] . " " . $staff_id['staff_zip']."";
echo "</td></tr>";

echo "</tbody></table>";
echo "<br>";

echo "<br>";

?>
</div>
<div class="footer">
<?php include('footer.php'); ?>
</div>