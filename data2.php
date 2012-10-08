
<?


$connect = mysql_connect(localhost, root, chapstick2012)
	or die('Could not connect: ' . mysql_error());
	//Select The database
	$bool = mysql_select_db(revotrack, $connect);
	if ($bool === False){
	   print "can't find $database";
	}
	
	$query = "SELECT * FROM staff ORDER BY staff_lastname";
	// sort data.
	if (isset($_GET['sortdatafield']))
	{
		$sortfield = $_GET['sortdatafield'];
		$sortorder = $_GET['sortorder'];
		
		if ($sortfield != NULL)
		{
			if ($sortorder == "desc")
			{
				$query = "SELECT * FROM staff ORDER BY staff_lastname";
			}
			else if ($sortorder == "asc")
			{
				$query = "SELECT * FROM staff ORDER BY staff_lastname";
			}			
		}
	}
	$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
	// get data and store in a json array
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
		$staff[] = array(
			'Name' => $row['staff_lastname'] . ", " . $row['staff_firstname'],
			'Job' => $row['staff_job'],
			'Phone' => $row['staff_phone'],
			'Email' => $row['staff_email'],

		  );
	}
  
	echo json_encode($staff);
	
	?>