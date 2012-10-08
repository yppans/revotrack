<?php
include('header.php');
?>

<div id="main"><div class="scroll-pane">
<form action="staff_create_user.php" id="staff_create" method="post">
<br>
<table class="features-table"><tbody>
<tr><th width=20%>Job:</td><Td>
<select name="staff_job">
<option value="null">Select a job...</option>
<?php
$con = mysql_connect("localhost","root","chapstick2012");
if (!con)
{
die('no worky: ' . mysql_error());
}
mysql_select_db("revotrack", $con);
$sql = "SELECT * FROM job_types ORDER BY job_type";
$result = mysql_query($sql);
$num = mysql_num_rows($result);
$i = 0;
while ($i < $num) {
$job_id =mysql_result($result, $i, "job_id");
$job_name =mysql_result($result, $i, "job_type");
echo '<option value="'.$job_name.'">'.$job_name.'</option>';
$i++;		
}
?>
</select>
</td></tr>
<tr><th width=20%>Level:</td><Td>
<SELECT name="staff_level">
<OPTION value="NULL">Select A User Level</option>
<OPTION value="admin">Administrator</OPTION>
<OPTION selected value="user">User</OPTION>
</SELECT>
</td></tr>
<tr>
<th width="124">Login</th>
<td width="168"><input name="staff_user" type="text" class="textfield" id="staff_user" /></td>
</tr>
<tr>
<th>Password</th>
<td><input name="staff_passwd" type="password" class="textfield" id="staff_passwd" /></td>
</tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
    <tr>
<tr><th width=20%>Last Name:</td><Td> <input class="textfield" type="text" name="staff_lastname" /></td></tr>
<tr><th width=20%>First Name:</td><Td> <input class="textfield" type="text" name="staff_firstname" /></td></tr>
<tr><th>Date of Birth:</td><Td> <input class="textfield" type="text" name="staff_dob" /></td></tr>
<tr><th>Address:</td><Td> <input class="textfield" type="text" name="staff_address" /></td></tr>
<tr><th>City:</td><Td> <input class="textfield" type="text" name="staff_city" /></td></tr>
<tr><th>ZIP Code:</td><Td> <input class="textfield" type="text" name="staff_zip" /></td></tr>

<tr><th>Telephone:</td><Td> <input class="textfield" type="text" name="staff_phone" /></td></tr>
<tr><th>Email:</td><Td> <input class="textfield" type="text" name="staff_email" /></td></tr>
<tr><th><small>Please double-check information before submitting.</td><Td><input type="submit" value="Submit" /></td></tr></tbody></table>
</form>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>