<?php
  //getting id variable from get method
  $id=$_GET['id'];
  echo $id;
  include_once "../Connect/connection.php";
$delete = "delete  FROM students where id='$id'";
$result = mysqli_query($conn, $delete);

//After delete record then call display1.php
header("location:ViewStudent.php");
?>