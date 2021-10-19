<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select</title>
</head>

<body>
<table border="1">
<?php
require_once("connection/conn.php");
$sql = "SELECT CustomerID, CompanyName FROM customers1";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == false){
	echo "No results found";
} else {
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["CustomerID"] . "</td><td>" . $row["CompanyName"] . "</td><td><a href='details.php?id=" . $row["CustomerID"] . "'>Details</a></td><td><a href='update.php?id=" . $row["CustomerID"] . "'>Update</a></td><td><a href='delete.php?id=" . $row["CustomerID"] . "'>Delete</a></td></tr>";
	}
}
mysqli_close($con);
?>
</table>
</body>
</html>