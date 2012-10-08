<?php

function disp_table() {
echo "<table class='features-table'>
<thead><tr>
<th>Name</th>
<th>Date</th>
<th>Time In</th>
<th>Time Out</th>
<th>Calls</th>
</tr></thead>";
}

function staff_table() {
echo "<table class='features-table'>
<thead><tr>
<th>Name</th>
<th>DOB</th>
<th>zip</th>
<th>emailt</th>
<th>phone</th>
</tr></thead>";
}

function tb_func() {
$totals = mysql_query($sql = "SELECT * from staff, phonebank where staff_job = 'phonebank' group by staff_id");
$row = mysql_fetch_array($totals);
while ($row = mysql_fetch_array($totals))
{
echo "<tbody><tr>";
echo "<td><a href='phone_indv_tot.php?phone_id=" . $row['staff_id'] . "'>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</a></td>";
echo "<td>" . $row['phone_date'] . "</td>";
echo "<td>" . $row['phone_timein'] . "</td>";
echo "<td>" . $row['phone_timeout'] . "</td>";
echo "<td>" . $row['phone_calls'] . "</td>";
echo "</tr></tbody>";
}
}

function staff_data() {
$staff = mysql_query($sql = "SELECT * from staff group by staff_id");
$row = mysql_fetch_array($staff);
while ($row = mysql_fetch_array($staff))
{
echo "<tbody><tr>";
echo "<td><a href='phone_indv_tot.php?phone_id=" . $row['staff_id'] . "'>" . $row['staff_lastname'] . ", " . $row['staff_firstname'] . "</a></td>";
echo "<td>" . $row['staff_dob'] . "</td>";
echo "<td>" . $row['staff_zip'] . "</td>";
echo "<td>" . $row['staff_email'] . "</td>";
echo "<td>" . $row['staff_phone'] . "</td>";
echo "</tr></tbody>";
}}

function add_user() {
$sql="INSERT INTO staff (staff_level, staff_user, staff_passwd, staff_lastname, staff_firstname, staff_job, staff_dob, staff_address, staff_city, staff_zip, staff_phone, staff_email)
VALUES
('$_POST[staff_level]','$_POST[staff_user]','".md5($_POST['staff_passwd'])."','$_POST[staff_lastname]','$_POST[staff_firstname]','$_POST[staff_job]','$_POST[staff_dob]','$_POST[staff_address]','$_POST[staff_city]','$_POST[staff_zip]','$_POST[staff_phone]','$_POST[staff_email]')";

}

function getjobs() {
echo "<select name='staff_job'>";
echo "<option value='null'>Select a job...</option>";
$sql = "SELECT * FROM job_types ORDER BY job_type";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num) {
$job_id =mysql_result($result, $i, "job_id");
$job_name =mysql_result($result, $i, "job_type");
echo '<option value="'.$job_name.'">'.$job_name.'</option>';
$i++;		
}}
?>