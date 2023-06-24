<?php
include_once "../Connect/connection.php";
$msg="";
	$opr="";
	$id="";
	
	if(isset($_POST['opr']))
        {
	     $opr=$_POST['opr'];
        }
	if(isset($_POST['rs_id']))
        {
	     $id=$_POST['rs_id'];
        }
?>
<html>
<head>
      <title>Teachers Entry</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <style>
            .padding
             {
                padding: 10px 50px ;
             }
             fieldset
             {
                    background-color: #f1f1f1;
                    border: none;
                    border-radius: 2px;
                    margin-bottom: 12px;
                    overflow: hidden;
                    padding: 0 .625em;
             }
             label
             {
                    cursor: pointer;
                    display: inline-block;
                    padding: 3px 6px;
                    text-align: right;
                    width: 150px;
                    vertical-align: top;
             }
             input
             {
                    font-size: inherit;
             }
             right
             {
                    width: 55vw; 
                    margin-right : 30vw;
                    float : right;
             }
      </style>
</head>
<body style="background-color:powderblue;">
      <?php 
             
?>
      <?php if (isset($_POST['form_submitted'])):
             if($opr=="SUBMIT")
             {
                    $id=$_POST['id'];
                    $name=$_POST['Name'];
                    $g=$_POST['G'];
                    $DoB=$_POST['dat'];
                    $add=$_POST['Add'];
                    $salary=$_POST['Salary'];
                    $m_status=$_POST['Mar'];
                    $m_no=$_POST['Mo_no'];
                    $email=$_POST['Email'];
                    $post=$_POST['Post'];
                    $dept=$_POST['Depart'];
                    $room=$_POST['Room'];
       ?>
       <p><h1>You have been registered successfully...</h1></p>
<?php 
      
                    $d=strtotime($DoB);
                    $DoB=date("Y-m-d",$d);
                    $sql="insert into teacher_entry values('$id','$name', '$g', '$post', '$dept', '$room', '$m_no', '$email', '$DoB', '$m_status','$salary', '$add')";
                    if (!mysqli_query($conn, $sql))
                    {
                           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
             }  
             if($opr=="Update")
             {
                    $id=$_POST['id'];
                    $name=$_POST['Name'];
                    $g=$_POST['G'];
                    $DoB=$_POST['dat'];
                    $add=$_POST['Add'];
                    $salary=$_POST['Salary'];
                    $m_status=$_POST['Mar'];
                    $m_no=$_POST['Mo_no'];
                    $email=$_POST['Email'];
                    $post=$_POST['Post'];
                    $dept=$_POST['Depart'];
                    $room=$_POST['Room'];
          
                    $sql_upd="UPDATE Teacher_entry SET ID='$id', Name='$name', Gender='$g', Post='$post', Department='$dept', Room_No='$room', Mobile_No='$m_no', Email_id='$email', Date_of_Birth='$DoB', Marital_status='$m_status', Salary='$salary', Address='$add' WHERE ID='$id'";
                    $resu=mysqli_query($conn, $sql_upd);
                    if($resu)
                           echo "Record Updated Successfully...<br>";
                    else
                           echo "Could not Update :".mysqli_error($conn);
             }
      mysqli_close($conn);
?>
     <button onclick="window.location.href='Teachers_entry.php';">Register New</button>
	 <button onclick="window.location.href='view_teachers.php';">View Entry</button>
<?php else: ?>
     <h1 style="text-align:center;"> Registration Form for Teachers</h1>
            <form action="Teachers_entry.php"method="POST" style=" width: 100vw; margin-left : 30vw; ">
                 <label for="ID" >ID:</label>
                 <input type="text" name="id" placeholder="ID" style="height:30px; width:200px;" class="padding"><br><br>
                 <label for="Name" >Name:</label>
                 <input type="text" name="Name" placeholder="Teacher's Name" style="height:30px; width:200px;" class="padding"><br><br>
                 <label for="Gender" >Gender:</label>
                 <label for="male">Male</label>
                 <input type="radio" id="male" name="G" value="Male" >                 
                 <label for="female">Female</label>
                 <input type="radio" id="female" name="G" value="Female"><br><br>                 
                 <label for="Post" >Post:</label>
                 <input type="text" name="Post" placeholder="Post" style="height:30px; width:200px;"><br><br>
                 <label for="Department" >Department:</label>
                 <select name="Depart" style="height:30px; width:200px;">
                 <option value="Civil Engineering">Civil Engineering</option>
                 <option value="Computer Science Engineering">Computer Science Engineering</option>
                 <option value="Electrical Engineering">Electrical Engineering</option>
                 <option value="Electric Instrumentation and Control Engineering">Electric Instrumentation and Control Engineering</option>
                 <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                 <option value="Physics Department">Physics Department</option>
                 <option value="Chemistry Department">Chemistry Department</option>
                 <option value="Maths Department">Maths Department</option>
                 <option value="English Department">English Department</option>
                 <option value="Mechanical Engineering">Mechanical Engineering</option>
                 <option value="Others">Others</option>
                 </select><br><br>
                 <label for="Room-No" >Room-No:</label>
                 <input type="text" name="Room" placeholder="Room-No" style="height:30px; width:200px;"><br><br>
                 <label for="Mobile-No" >Mobile-No:</label>
                 <input type="text" name="Mo_no" size="10" placeholder="Mobile No."style="height:30px; width:200px;"><br><br>
                 <label for="Email-ID" >Email-ID:</label>
                 <input type="text" name="Email" placeholder="Email ID" style="height:30px; width:200px;"><br><br>
                 <label for="Date of Birth" >Date of Birth:</label>
                 <input type = "date" name="dat" placeholder="Date of Birth" style="height:30px; width:200px;"><br><br>
                 <label for="Marital Status" >Marital Status:</label>
                 <select name="Mar" style="height:30px; width:200px;">
                 <option value="Unmarried">Unmarried</option>
                 <option value="Married" >Married</option>
                 <option value="Divorcee">Divorcee</option>
                 <option value="Widowed">Widowed</option>
                 </select><br><br>
                 <label for="Salary" >Salary:</label>
                 <input type="text" name="Salary" placeholder="Salary" style="height:30px; width:200px;"><br><br>
                 <label for="Address" >Address:</label>
                 <input type="text" name="Add" placeholder="Address" style="height:30px; width:200px;"><br><br>
                 <right><input type="hidden" name="form_submitted" value="1" />
                 <input type="submit" value="SUBMIT" name="opr" ></right>
                 <input type="submit" name="opr" value="Update">
                 
            </form>
<?php endif; ?>
</body>
</html>