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
                  <h1 >Subjects Entry Form</h1><br>
                    <div class="id">

                              <input type="text" name="id" class="form-control"  placeholder="college id">
                        </div><br>
                
                 <div class="semester">

                              <input type="text" name="semester" class="form-control"  placeholder="semester">
                        </div><br>  
                
				<div class="subject_name_pos">
					<input type="text" name="subjectname" class="form-control" placeholder="subjectname" />
				</div><br>
				<div class="subject_id_pos">
					<input type="text" name="subjectid" class="form-control" placeholder="subjectid" />
				</div><br>
               
                 
				
                 <div class="teacher_btn_pos">
					<input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-large" value="Change Now" />&nbsp;&nbsp;&nbsp;
					<input type="reset"  href="#" class="btn btn-primary btn-large" value="Cancel" />&nbsp;&nbsp;&nbsp;
				</div>
				
                  </fieldset>
             
                 
                 
            </form>
			<?php
               if($_SERVER['REQUEST_METHOD']=='POST'){
                $id=$_POST['id'];
                $semester=$_POST['semester'];
                 $subjectname=$_POST['subjectname'];
                 $subjectid=$_POST['subjectid'];
			include_once "../Connect/connection.php";
			if($conn){
				//echo "Connection Successful";
				$sql="update subjects set semester='$semester',subjectname='$subjectname',subjectid='$subjectid' where id='$id'";
				$result=mysqli_query($conn,$sql);
				
                header("location:View_Subject.php");
			}
			else{
			  die(mysqli_error($conn));
			}
			}
			
			?>
			
</body>