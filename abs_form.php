<div class="scroll_pane"><form action="abs_insert.php" id="abs_input" method="post" onsubmit="return formCheck(this);">
<br>
<table align="center" class="features-table">
<thead>
<th colspan="2"><center>
Canvasser Data Input</center>
</th>
<tbody>
<tr><td>Name: <input onclick="if(this.value=='First, Middle, Last'){this.value=''}" value="First, Middle, Last" class="textfield" type="text" name="abs_name" />					</select">
</td><td>Address: <input onclick="if(this.value=='Street Address'){this.value=''}" value="Street Address" class="textfield" type="text" name="abs_address" /></td></tr>
<tr><td>City: <input onclick="if(this.value=='City'){this.value='Jacksonville'}" value="City" class="textfield" type="text" name="abs_city" /></td>
<td>ZIP Code: <input onclick="if(this.value=='ZIP Code'){this.value=''}" value="ZIP Code" class="textfield" type="text" name="abs_zip" /></td>
</tr>
<tr>
<td>DOB: <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script>
$(function() {
$("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
});
</script>
<input class="textfield" type="text" id="datepicker" name="abs_dob" onclick="if(this.value=='Date of Birth'){this.value=''}" value="Date of Birth"  /></td>
<td>Telephone: <input onclick="if(this.value=='Telephone'){this.value=''}" value="Telephone"  class="textfield" type="text" name="abs_phone" /></td></tr>
<tr><td>Email: <input onclick="if(this.value=='Email'){this.value=''}" value="Email"  class="textfield" type="text" name="abs_email" /></td>
<td>Registration No.: <input onclick="if(this.value=='Registration'){this.value=''}" value="Registration" class="textfield" type="text" name="abs_reg" /></td></tr>
<tr>
<td colspan="2"><small>Please double-check information before submitting. <input type="submit" value="Submit" /></td></tr></tbody></table>
</form>
</div>