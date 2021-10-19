<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select3</title>
</head>

<body>
<?php

require_once("connection/conn.php");
//$CustID = "ALFKI";
?>
<form id="form1" action="select3.php" method="post" name="form1">
<select name="CustID" required>
<option value="">Select Customer</option>
<?php
$result = mysqli_query($con, "Select CustomerID, CompanyName from customers1");
while($row=mysqli_fetch_array($result)){
	echo "<option value='$row[CustomerID]'>$row[CustomerID] | $row[CompanyName]</option>";
}
?>
</select>
<input type="submit" name="submit" value="Find">
</form>

<?php
if(!isset($_POST["CustID"])){
	
} else {
$result = mysqli_query($con, "SELECT OrderID from orders WHERE CustomerID = '$_POST[CustID]'");

echo "<h1>" . $_POST["CustID"] . "</h1>";
//echo "<h1>$_POST[CustID]</h1>";
if(mysqli_num_rows($result) == false){
	echo "No results found.";
} else {
	while($row = mysqli_fetch_array($result)){
		echo "<table border=1>";
		echo "<tr><td colspan='2'>" . $row['OrderID'] . "</td></tr>";
		
		$result2 = mysqli_query($con,"SELECT order_details.ProductID AS PID, products.ProductName AS PN from order_details INNER JOIN products ON order_details.ProductID = products.ProductID WHERE order_details.OrderID = $row[OrderID]");
		while($row = mysqli_fetch_array($result2)){
			echo "<tr><td>" . $row["PID"] . "</td><td>" . $row["PN"] . "</td></tr>";
		}
		echo "</table><br>";		
	}
}
mysqli_close($con);
}
?>
</body>
</html>