<form action="phone_insert.php" id="phone_input" method="post">
<br>
<table class="features-table"><tbody>
<tr><th>Phonebanker:</td><Td>
<select name="phone_id">
<option value="null">Select a caller...</option>
						<?php
						$con = mysql_connect("localhost","root","chapstick2012");
						if (!con)
						{
						die('no worky: ' . mysql_error());
						}
						mysql_select_db("revotrack", $con);
						$sql = "SELECT * FROM staff WHERE staff_job='phonebank' ORDER BY staff_lastname";
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
						?>
					</select">
</td></tr>
<tr><th>Date:</td><Td><script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script>
$(function() {
$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
});
	</script>
 <input class="textfield" type="text" id="datepicker" name="phone_date" /></td></tr>
<tr><th>Time In:</td><Td> <input class="textfield"  type="text" name="phone_timein" /></td></tr>
<tr><th>Time Out:</td><Td> <input class="textfield" type="text" name="phone_timeout" /></td></tr>
<tr><th>Calls:</td><Td> <input class="textfield" type="text" name="phone_calls" /></td></tr>
<tr><th><small>Please double-check information before submitting.</td><Td><input type="submit" value="Submit" /></td></tr></tbody></table>
</form>
