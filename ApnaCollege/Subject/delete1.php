<?php
	include_once "../Connect/connection.php";
	//getting id variable from get method
	$id=$_GET['id'];
	echo $id;
	$sql = "delete  FROM subjects where id='$id'";
	$result=mysqli_query($conn,$sql);
	header("location:View_Subject.php");
?>