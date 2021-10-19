<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Details</title>
</head>

<body>
<?php
if(!isset($_GET["id"])){
	header("Location: select1.php");
} else {
require_once("connection/conn.php");
$CustID = $_GET["id"];
$sql = "SELECT * FROM customers1 WHERE CustomerID = '$CustID'";
$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) == false){
	echo "No results found";
} else {
$row = mysqli_fetch_array($result);
?>
<table border=1>
<?php
	echo "<tr><td><b>CustomerID</b></td><td>" . $row["CustomerID"] . "</td></tr>";
	echo "<tr><td><b>CompanyName</b></td><td>" . $row["CompanyName"] . "</td></tr>";
	echo "<tr><td><b>ContactName</b></td><td>" . $row["ContactName"] . "</td></tr>";
	echo "<tr><td><b>ContactTitle</b></td><td>" . $row["ContactTitle"] . "</td></tr>";
}
?>
</table>
<br><a href="select2.php">BACK</a>
<?php  }

mysqli_close($con);
?>
</body>
</html>