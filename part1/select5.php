<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Select</title>
</head>

<body>
<?php
require_once("connection/conn.php");
$sql = "SELECT * FROM categories";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) == false){
	echo "No results found";
} else {
	while($row = mysqli_fetch_array($result)){
		$catID = $row["CategoryID"];
		$sql1 = "SELECT COUNT(CategoryID) AS C_Items FROM products WHERE CategoryID = $catID";
		$result1 = mysqli_query($con, $sql1);
		$row1 = mysqli_fetch_array($result1);
		echo $row["CategoryName"] . " (<a href='products.php?catID=$catID'>" . $row1["C_Items"] . "</a>)<br>";
	}
}
mysqli_close($con);
?>
</table>
</body>
</html>