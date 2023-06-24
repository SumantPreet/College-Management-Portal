<html>
<head>
      <title>Student_Entry</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <link rel="stylesheet" href="style.css">
	  <style>
		  a:link, a:visited {
  background-color: orange;
  color: black;
  border: 2px solid black;
  
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

	  </style>
</head>
<body>
     

      <div class="container">
				<p style="text-align:center;"><b>Here, you'll add new student's detail to record into database.</b></p>
			</div>
     
            <form action=""method="POST" >
                  <fieldset style=margin-left:470px;>
                  <h1 >Students Entry Form</h1><br>
                  <div class="student_name_pos">
					<input type="text" name="fname" class="form-control" placeholder="First name" />
					<input type="text" name="lname" class="form-control" placeholder="Last name" />
				</div><br>
                        <div class="id">

                              <input type="text" name="id" class="form-control"  placeholder="college id">
                        </div><br>
                  <div class="student_radio_pos">
					<input type="radio" name="gender" value="Male" /> <span class="p_font">&nbsp;Male</span>
					<input type="radio" name="gender" value="Female" /> <span class="p_font">&nbsp;Female</span>
				</div><br>
                  <div class="student_bdayPlace_pos">
                              <span>Date of birth:</span>
					<input type="date" name="dob" class="form-control" placeholder="Date of birth" />
				</div><br>
				
				<div class="student_address_pos">
					<input type="text" name="address" class="form-control" placeholder="Address" />
				</div><br>
				
				<div class="student_mobile_pos">
					<input type="number" name="phone" class="form-control" placeholder="Mobile no." />
				</div><br>
				
				<div class="student_mail_pos">
					<input type="email" name="email" class="form-control" placeholder="Email address" />
				</div><br>
				
				<div class="student_Department_pos">
					<input type="text" name="Department" class="form-control" placeholder="Department" />
				</div><br>
				
                 <div class="teacher_btn_pos">
					<input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-large" value="Register" />&nbsp;&nbsp;&nbsp;
					<input type="reset"  href="#" class="btn btn-primary btn-large" value="Cancel" />&nbsp;&nbsp;&nbsp;
					<a href="ViewStudent.php" class="disp">Display</a>
				</div>
				
                  </fieldset>
             
                 
                 
            </form>
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
				   echo "<b style='box-shadow:1px 1px 5px 1px rgb(255,90,40);'>Data inserted successfuly</b>";
				}
				else{
					die(mysqli_error($con));
				}
				}
				else{
				die(mysqli_error($conn));
				}
				}
			?>
			
</body>
</html>