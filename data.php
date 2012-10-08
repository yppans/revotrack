<?php
$hostname = "localhost";
$database = "revotrack";
$username = "root";
$password = "chapstick2012";

$connect = mysql_connect($hostname, $username, $password)
	or die('Could not connect: ' . mysql_error());
	//Select The database
	$bool = mysql_select_db($database, $connect);
	if ($bool === False){
	   print "can't find $database";
	}

	$query = "SELECT * FROM  `canvass` ORDER BY cnv_date LIMIT 0 , 100";
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());

	// get data and store in a json array
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$orders[] = array(
			'Knocks' => $row['cnv_knocks'],
			'Yes' => $row['cnv_yes'],
			'Date' => $row['cnv_date']
		  );
	}

	echo json_encode($orders);
?>