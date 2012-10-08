<?php
$hostname = "localhost";
$database = "revotrack";
$username = "root";
$password = "chapstick2012";

$connect = mysql_connect($hostname, $username, $password)
or die('Could not connect: ' . mysql_error());
//select database
mysql_select_db($database, $connect);
//Select The database
$bool = mysql_select_db($database, $connect);
if ($bool === False){
   print "can't find $database";
}
// get data and store in a json array
$query = "SELECT * FROM staff";
$from = 0;
$to = 30;
$query .= " LIMIT ".$from.",".$to;
 
$result = mysql_query($query) or die("SQL Error 1: " . mysql_error());
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $employees[] = array(
        'LastName' => $row['staff_lastname'],
        'FirstName' => $row['staff_lastname'],
    'JobTitle' => $row['staff_job'],
    'Address' => $row['staff_address'],
    'City' => $row['staff_city']
      );
}
 
echo json_encode($employees);

?>