<form action="canvass_insert.php" id="canvass_input" method="post" onsubmit="return formCheck(this);">
<br>
<table align="center" class="features-table">
<thead>
<th colspan="2"><center>
Canvasser Data Input</center>
</th>
<tbody>
<tr><td>Canvasser: 
<select class="textfield" name="cnv_id">
<option value="null">Select a canvasser...</option>
						<?php
						$con = mysql_connect("localhost","root","chapstick2012");
						if (!con)
						{
						die('no worky: ' . mysql_error());
						}
						mysql_select_db("revotrack", $con);
						$sql = "SELECT * FROM staff WHERE staff_job='canvass' ORDER BY staff_lastname";
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
</td><td>Turf: <input onclick="if(this.value=='Turf Canvassed'){this.value=''}" value="Turf Canvassed" class="textfield" type="text" name="cnv_turf" /></td></tr>
<tr><td>Hours: <input onclick="if(this.value=='Paid Hours Worked'){this.value=''}" value="Paid Hours Worked" class="textfield" type="text" name="cnv_hours" /></td><td>Date: <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script>
$(function() {
$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
});
	</script>
 <input class="textfield" type="text" id="datepicker" name="cnv_date" onclick="if(this.value=='Date Canvassed'){this.value=''}" value="Date Canvassed"  /></td></tr>
<tr><td>Knocks: <input onclick="if(this.value=='Doors Knocked'){this.value=''}" value="Doors Knocked" class="textfield" type="text" name="cnv_knocks" /></td><td>Conversations: <input onclick="if(this.value=='Conversations'){this.value=''}" value="Conversations"  class="textfield" type="text" name="cnv_conv" /></td></tr>
<tr><td>Yes: <input onclick="if(this.value=='Confirmed Yes'){this.value=''}" value="Confirmed Yes"  class="textfield" type="text" name="cnv_yes" /></td><td>No: <input onclick="if(this.value=='Confirmed No'){this.value=''}" value="Confirmed No" class="textfield" type="text" name="cnv_no" /></td></tr>
<tr><td>Maybe: <input onclick="if(this.value=='Maybe Votes'){this.value=''}" value="Maybe Votes" class="textfield" type="text" name="cnv_maybe" /></td><td>Signs: <input onclick="if(this.value=='Signs Given'){this.value=''}" value="Signs Given" class="textfield" type="text" name="cnv_signs" /></td></tr>
<tr><td>Absentees: <input onclick="if(this.value=='Absentee Ballots'){this.value=''}" value="Absentee Ballots" class="textfield" type="text" name="cnv_absentee" /></td><td><small>Please double-check information before submitting. <input type="submit" value="Submit" /></td></tr></tbody></table>
</form>
