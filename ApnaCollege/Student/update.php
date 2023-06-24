<head>
    <link rel="stylesheet" href="style.css">
</head>

<!--copy and paste Student_Entry.php file code here -->
<body>
   <!--Get id -->
   <?php $id=$_GET['id']; ?>  

      <div class="container">
				<p style="text-align:center;"><b>Here, you'll add new student's detail to record into database.</b></p>
			</div>
     
            <form action=""method="POST" >
                  <fieldset style=margin-left:470px;>
                  <!--create hidden field  and pass data to id here-->
                  <h1 >Students Entry Form</h1><br>
                  <input type="hidden" name="id" value="<?php echo $id; ?>">
                  <div class="student_name_pos">
					<input type="text" name="fname" class="form-control" placeholder="First name" />
					<input type="text" name="lname" class="form-control" placeholder="Last name" />
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
					<input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-large" value="Change Now" />&nbsp;&nbsp;&nbsp;
					<input type="reset"  href="#" class="btn btn-primary btn-large" value="Cancel" />&nbsp;&nbsp;&nbsp;
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
				$sql="update students set fname='$fname',lname='$lname',dob='$dob',address='$address',gender='$gender',phone='$phone',email='$email',Department='$Department' where id='$id'";
				$result=mysqli_query($conn,$sql);
				
                header("location:ViewStudent.php");
			}
			else{
			  die(mysqli_error($conn));
			}
			}
			
			?>
			
</body>