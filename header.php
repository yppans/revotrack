<html>
<head>
<link type="text/css" href="style/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<link type="text/css" href="css/humanity/jquery-ui-1.8.24.custom.css" rel="stylesheet" />
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="includes/style.css" />
<link rel="stylesheet" type="text/css" href="ajaxtabs/ajaxtabs.css" />
<script type="text/javascript" src="ajaxtabs/ajaxtabs.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="script/jquery.mousewheel.js"></script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="script/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
			$(function()
{
	$('.scroll-pane').each(
		function()
		{
			$(this).jScrollPane(
				{
					showArrows: $(this).is('.arrow')
				}
			);
			var api = $(this).data('jsp');
			var throttleTimeout;
			$(window).bind(
				'resize',
				function()
				{
					if ($.browser.msie) {
						// IE fires multiple resize events while you are dragging the browser window which
						// causes it to crash if you try to update the scrollpane on every one. So we need
						// to throttle it to fire a maximum of once every 50 milliseconds...
						if (!throttleTimeout) {
							throttleTimeout = setTimeout(
								function()
								{
									api.reinitialise();
									throttleTimeout = null;
								},
								50
							);
						}
					} else {
						api.reinitialise();
					}
				}
			);
		}
	)

});</script>
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
<script type="text/javascript" src="jqwidgets/jqwidgets/jqxcalendar.js"></script>

		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
</head>
<body>

<?php
	require_once('auth.php');
?>
<div class="logo" valign="bottom">
<img src="includes/logo.png">
<img align="right" src="images/icon-rss.png">
<img align="right" src="images/icon-facebook.png">
<img align="right" src="images/icon-email.png">
<img align="right" src="images/icon-twitter.png">
<img align="right" src="images/icon-linkedin.png">



</div>

<div class="sidebar1"><div class="urbangreymenu">

<h3 class="headerbar"><a href="#">Main Menu</a></h3>
<ul class="submenu">
<li><a href="index.php">Home</a></li>
<li><a href="calendar.php">Calendar</a></li>
<li><a href="contacts.php">Contacts</a></li>
<li><a href="#">Forum</a></li>
<li><a href="#">Links</a></li>
<li><a href="#">FAQ</a></li>
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
<li><a href="phone_totals.php">Phonebank Totals</a></li>
<li><a href="phone_avg.php">Averages</a></li>
<li><a href="phone_input.php">Input Data</a></li>	
</ul>

<h3 class="headerbar"><a href="#">Absentee</a></h3>
<ul class="submenu">
<li><a href="abs_view.php">View Records</a></li>
<li><a href="abs_input.php">Input Requests</a></li>
</ul>

<h3 class="headerbar"><a href="#">Payroll</a></h3>
<ul class="submenu">
<li><a href="cnv_payroll.php">Canvass Payroll</a></li>
<li><a href="#">Phone Payroll</a></li>
<li><a href="#">Office Payroll</a></li>
</ul>

<h3 class="headerbar"><a href="#">Admin Area</a></h3>
<ul class="submenu">
<li><a href="staff_list.php">View All Employees</a></li>
<li><a href="staff_create.php">Add Employee</a></li>	
<li><a href="staff_create_admin.php">Add Administrator</a></li>
<li><a href="logout.php">Log Out</a></li>
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