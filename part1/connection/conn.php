<?php
//connecting to the database
//Test
$con = mysqli_connect("localhost","root","","north21");
//if the connection is unsuccessful, returns a message and the error.
if(!$con){
	die('Could not connect: ' . mysqli_error());
}
?>