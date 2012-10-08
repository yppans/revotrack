<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/style.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="includes/ddaccordion.js">
</script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "headerbar", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [0], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: true, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", "selected"], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["", "", ""], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "normal", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="logo">
<img src="includes/logo.png">
</div>

<div class="sidebar1"><div class="urbangreymenu">

<h3 class="headerbar"><a href="#">Main Menu</a></h3>
<ul class="submenu">
<li><a href="index.php">Home</a></li>
<li><a href="calendar.php">Calendar</a></li>
<li><a href="contacts.php">Contacts</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Links</a></li>
<li><a href="faq.php">FAQ</a></li>
</ul>

<h3 class="headerbar"><a href="#">Canvassing</a></h3>
<ul class="submenu">
<li><a href="cnv_view.php">View Canvassers</a></li>
<li><a href="cnv_daily.php">Daily Stats</a></li>
<li><a href="cnv_individual.php">Individual Totals</a></li>
<li><a href="cnv_totals.php">Field Team Totals</a></li>
<li><a href="cnv_averages.php">Averages</a></li>
<li><a href="#">Goals</a></li>
<li><a href="canvass_input.php">Input Data</a></li>	
</ul>

<h3 class="headerbar"><a href="#">Phone Banks</a></h3>
<ul class="submenu">
<li><a href="phonebank_view.php">View Phonebankers</a></li>
<li><a href="phone_individual.php">Individual Totals</a></li>
<li><a href="#">Phonebank Totals</a></li>
<li><a href="#">Averages</a></li>
<li><a href="#">Goals</a></li>
<li><a href="phone_input.php">Input Data</a></li>	
</ul>

<h3 class="headerbar"><a href="#">Payroll</a></h3>
<ul class="submenu">
<li><a href="#">Canvass Payroll</a></li>
<li><a href="#">Phone Payroll</a></li>
<li><a href="#">Office Payroll</a></li>
</ul>

<h3 class="headerbar"><a href="#">Administration</a></h3>
<ul class="submenu">
<li><a href="staff_list.php">View All Employees</a></li>
<li><a href="staff_create.php">Add Employee</a></li>	
</ul>
</div>
</div>
<?php
function utime (){
    $time = explode( " ", microtime());
    $usec = (double)$time[0];
    $sec = (double)$time[1];
    return $sec + $usec;
}

$start = utime();
?>
<div id="main">
<h1>Please log in to continue</h1>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Login</b></td>
      <td width="188"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <td><b>Password</b></td>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>
</div>
<div class="footer">
<?php include('footer.php'); ?>
</div>
</body>
</html>
