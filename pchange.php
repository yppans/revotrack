<?php
include('header.php');
?>

<div id="main"><div class="scroll-pane">
<form action="pchange_exec.php" id="staff_create" method="post">
<br>
<table class="features-table"><tbody>
<tr><th width=20%>Employee Name:</td><Td>

<select name="cnv_id">
<option value="null">Select an employee...</option>
						<?php
						$con = mysql_connect("localhost","root","chapstick2012");
						if (!con)
						{
						die('no worky: ' . mysql_error());
						}
						mysql_select_db("revotrack", $con);
						$sql = "SELECT * FROM staff ORDER BY staff_lastname";
						$result = mysql_query($sql);
						$num = mysql_num_rows($result);
						$i = 0;
						while ($i < $num) {				
							$staff_id =mysql_result($result, $i, "staff_id");
							$staff_lastname =mysql_result($result, $i, "staff_lastname");
							$staff_firstname =mysql_result($result, $i, "staff_firstname");
							echo '<option value="'.$staff_id.'">'.$staff_lastname.', '.$staff_firstname.'</option>';
							$i++;
						}
						mysql_close($con);
						?></select></td></tr>
<tr>
<th>Password</th>
<td><input name="staff_passwd" type="password" class="textfield" id="staff_passwd" /></td>
</tr>
					<tr><td colspan="2">
<input type="submit" value="Submit" /></form></td></tr></table>
</div></div>
<div class="footer">
<?php include('footer.php'); ?>
</div>