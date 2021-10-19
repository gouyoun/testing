<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
</head>

<body>
<?php
require_once("connection/conn.php");
$CustID = $_GET["id"];
$result = mysqli_query($con, "Select CompanyName from customers1 Where CustomerID = '$CustID'");
//$result = mysqli_query($con, "Select CompanyName from customers1 Where CustomerID = '$_GET[id]'");
$row = mysqli_fetch_array($result);
echo "Do you want to delete <b>" . $row["CompanyName"] . "</b>?";
?>
<br>
<a href="deleteinter.php?id=<?php echo $_GET["id"];?>">YES</a>
<a href="select2.php">NO</a>

</body>
</html>