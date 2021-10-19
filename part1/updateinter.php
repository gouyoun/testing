<?php
if(!isset($_POST["customerid"]) && !isset($_POST["companyname"])){
	header("Location: select.php");
} else {
require_once("connection/conn.php");
$CompanyName = trim($_POST["companyname"]);
$ContactName = trim($_POST["contactname"]);
$ContactTitle = trim($_POST["contacttitle"]);
$CustID = $_POST["customerid"];

mysqli_query($con,"UPDATE customers1 SET CompanyName = '$CompanyName', ContactName = '$ContactName', ContactTitle = '$ContactTitle' WHERE CustomerID = '$CustID'");

mysqli_close($con);
header("Location: select2.php");
}
?>