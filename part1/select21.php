<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select</title>
</head>

<body>

<?php
require_once("main.php");
$result = selectCustomers("CustomerID", "CompanyName", "customers1");
if(mysqli_num_rows($result) == false){
	echo "No results found";
} else {
	echo "<table border='1'>";
	while($row = mysqli_fetch_array($result)){
		echo "<tr><td>" . $row["CustomerID"] . "</td><td>" . $row["CompanyName"] . "</td><td><a href='details.php?id=" . $row["CustomerID"] . "'>Details</a></td><td><a href='update.php?id=" . $row["CustomerID"] . "'>Update</a></td><td><a href='delete.php?id=" . $row["CustomerID"] . "'>Delete</a></td></tr>";
	}
	echo "</table>";
}
echo "<br><br><br>";

$result1 = selectCustomers("CustomerID", "ContactName", "customers1");
if(mysqli_num_rows($result1) == false){
	echo "No results found";
} else {
	echo "<table border='1'>";
	while($row = mysqli_fetch_array($result1)){
		echo "<tr><td>" . $row["CustomerID"] . "</td><td>" . $row["ContactName"] . "</td><td><a href='details.php?id=" . $row["CustomerID"] . "'>Details</a></td><td><a href='update.php?id=" . $row["CustomerID"] . "'>Update</a></td><td><a href='delete.php?id=" . $row["CustomerID"] . "'>Delete</a></td></tr>";
	}
	echo "</table>";
}

echo "<br><br><br>";

$arrFields = array("CustomerID", "CompanyName", "ContactName");
$result2 = selectCustomersDynamic($arrFields, "customers1");
if(mysqli_num_rows($result2) == false){
	echo "No results found";
} else {
	echo "<table border='1'>";
	while($row = mysqli_fetch_array($result2)){
		echo "<tr><td>" . $row["CustomerID"] . "</td><td>" . $row["CompanyName"] . "</td><td>" . $row["ContactName"] . "</td><td><a href='details.php?id=" . $row["CustomerID"] . "'>Details</a></td><td><a href='update.php?id=" . $row["CustomerID"] . "'>Update</a></td><td><a href='delete.php?id=" . $row["CustomerID"] . "'>Delete</a></td></tr>";
	}
	echo "</table>";
}
?>

</body>
</html>