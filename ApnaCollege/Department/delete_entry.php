<?php
include_once "../Connect/connection.php";
$name = $_GET['dname'];
$delete = "delete from department where dept_name='$name'";
$res = mysqli_query($conn, $delete);
header('location:view_department.php')
?>