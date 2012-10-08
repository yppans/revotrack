<?php include ('header.php'); ?>
<div id="main">
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
<script>
	$(function() {
		$( "#datepicker" ).datepicker();
				$( "#datepicker2" ).datepicker();
	});
	</script>


<div class="demo">

<p>Date: <input type="text" id="datepicker"></p>
<p>Date: <input type="text" id="datepicker2"></p>

</div>
</div>