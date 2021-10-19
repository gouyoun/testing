<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select</title>
</head>

<body>
<table border="1">
<?php
//include the connection php file in this php file.
require_once("connection/conn.php");
//Add a query to a variable
$sql = "SELECT CustomerID, CompanyName FROM customers1";
//Executing the sql query
$result = mysqli_query($con, $sql);
//check if the query returned any result
if(mysqli_num_rows($result) == false){
//if false, return a message
	echo "No results found";
} else {
//if true, display the content via a while loop
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["CustomerID"] . "</td><td>" . $row["CompanyName"] . "</td></tr>";
	}
}
//close the connection once finished
mysqli_close($con);
?>
</table>
</body>
</html>