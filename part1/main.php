<?php
function selectCustomers($field1, $field2, $table){
	require("connection/conn.php");
	$sql = "SELECT $field1, $field2 FROM $table";
	$result = mysqli_query($con, $sql);
	return $result;
	mysqli_close($con);
}

function selectCustomersDynamic($arrF, $table){
	require("connection/conn.php");
	$fields = "";
	for($i=0;$i<count($arrF);$i++){
		$fields .= $arrF[$i] . ",";
	}
	$fields = substr($fields, 0, -1);
	$sql = "SELECT $fields FROM $table";
	$result = mysqli_query($con, $sql);
	return $result;
	mysqli_close($con);
}
?>
