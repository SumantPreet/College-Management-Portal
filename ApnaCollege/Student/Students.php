<?php
include_once "../Connect/connection.php";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $address=$_POST['address'];
    
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
                      
    $email=$_POST['email'];
    
    $Department=$_POST['Department'];
if($conn){
    //echo "Connection Successful";
    $sql="insert into students(id,fname,lname,dob,address,gender,phone,email,Department) values('$id','$fname','$lname','$dob','$address','$gender','$phone','$email','$Department')";
    $result=mysqli_query($conn,$sql);
    if($result){
        include 'ViewStudents.php';
       // echo "<b>Data inserted successfuly</b>";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
  die(mysqli_error($con));
}
}

?>