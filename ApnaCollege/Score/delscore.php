<?php
	include_once "../Connect/connection.php";
	$id = $_GET['id'];
	$delete = "delete from Score where No ='$id'";
	$res = mysqli_query($conn, $delete);
	header('location:ViewScore.php')
?>