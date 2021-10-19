<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update</title>
</head>

<body>
<?php
if(!isset($_GET["id"])){
	header("Location: select2.php");
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
<form id="form1" name="form1" method="post" action="updateinter.php">
	<input type="hidden" name="customerid" id="customerid" value="<?php echo $CustID; ?>">
  <p>
    <label for="companyname">Company Name:</label>
    <input type="text" name="companyname" id="companyname" value="<?php echo $row["CompanyName"]; ?>" required>
  </p>
  <p>
    <label for="contactname">Contact Name:</label>
    <input type="text" name="contactname" id="contactname" value="<?php echo $row["ContactName"]; ?>" required>
  </p>
  <p>
    <label for="contacttitle">Contact Title:</label>
    <input type="text" name="contacttitle" id="contacttitle" value="<?php echo $row["ContactTitle"]; ?>" required>
  </p>
  <p>
    <input type="submit" name="submit" id="submit" value="Update">
  </p>
</form>
<?php
}
mysqli_close($con);
}
?>
</body>
</html>