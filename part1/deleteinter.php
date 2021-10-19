<?php
require_once("connection/conn.php");
mysqli_query($con,"Delete from customers1 Where CustomerID = '$_GET[id]'");
mysqli_close($con);
header("Location: select2.php");
?>