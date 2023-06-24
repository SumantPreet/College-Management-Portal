<html>
<head>
      <title>Subject_Entry</title>
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
     
			<form action=""method="POST" >
                  <fieldset style=margin-left:470px;>
                  <h1 >Subjects Entry Form</h1><br>
                    <div class="id">

                              <input type="text" name="id" class="form-control"  placeholder="id">
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
					<input type="submit" name="btn_sub" href="#" class="btn btn-primary btn-large" value="Register" />&nbsp;&nbsp;&nbsp;
					<input type="reset"  href="#" class="btn btn-primary btn-large" value="Cancel" />&nbsp;&nbsp;&nbsp;
					<a href="View_Subject.php" class="disp">Display</a>
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
				
                $sql="insert into subjects(id,semester,subjectname,subjectid) values('$id','$semester','$subjectname','$subjectid')";
                $result=mysqli_query($conn,$sql);
				if($result){
				   echo "<b style='box-shadow:1px 1px 5px 1px rgb(255,90,40);'>Data inserted successfuly</b>";
				}
				else{
					die(mysqli_error($conn));
				}
			}
			else{
			  die(mysqli_error($conn));
			}
			}
			?>
			
</body>
</html>