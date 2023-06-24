<?php

include_once "../Connect/connection.php";

$id= $_GET['id'];
$sid = $_GET['stuid'];
$bname = $_GET['bname'];
$subid = $_GET['subid'];
$mid = $_GET['midterm'];
$final = $_GET['final'];
$remark = $_GET['remark'];
?>
<html>
<head>
	<title>Score Entry</title>
	<link rel="stylesheet" type="text/css" href="../css/stylescr.css">
</head>
<body>
	<?php
	if(isset($_POST['Updated']))
	{	
		$sid=$_POST['StudentId'];
		$bname=$_POST['Branch'];
		$subid=$_POST['SubjectId'];
		$mid=$_POST['MidtermMarks'];
		$final=$_POST['FinalExamMarks'];
		$remark=$_POST['Remark'];
					
		$sql="update Score set sid='$sid', Branch='$bname', Subject_id='$subid', Midterm='$mid', Final='$final', Remarks='$remark' where No='$id'";
		
		mysqli_query($conn, $sql);
		
		if(!mysqli_query($conn, $sql))
				{
					echo "Error:" .$sql ."</br>" .mysqli_error($conn);
				}
				
		header('location:./ViewScore.php');
	}
	?>
	<div class="header">
			<h2>Score Entry Form</h2>
		</div>
	<fieldset>
	<form action=""method="POST">
		<form action="" method="POST">
			<div class="input-group">	
				<label>StudentId</label>
				<input type="text" name="StudentId" value="<?php echo $sid; ?>" class="padding"><br><br>
			</div>
					
			<div class="input-group">
				<label>Branch</label>
				<select id="Branch" name="Branch" class="select">
					<option selected value="<?php echo $bname; ?>" >"<?php echo $bname; ?>"</option>
					<option value="Computer Science and Engineering">CSE</option>
					<option value="Civil Engineering">CE</option>
					<option value="Mechanical Engineering">ME</option>
					<option value="Electrical Engineering">ELE</option>
					<option value="Electronics and Communication Engineering">ECE</option>
					<option value="Electronics and Instrumentation Engineering">EIE</option>
				</select>
			</div>
					
			<div class="input-group">
				<label>SubjectId</label>
				<input type="text" name="SubjectId" value="<?php echo $subid; ?>" class="padding"><br><br>
			</div>
					
			<div class="input-group">	
				<label>MidtermMarks</label>
				<input type="text" name="MidtermMarks" value="<?php echo $mid; ?>" class="padding"><br><br>
			</div>
					
			<div class="input-group">	
				<label>FinalExamMarks</label>
				<input type="text" name="FinalExamMarks" value="<?php echo $final; ?>" class="padding"><br><br>
			</div>
					
			<div class="input-group">
				<label>Remark</label>
				<select id="Remark" name="Remark" class="select">
					<option value="<?php echo $remark; ?>">"<?php echo $remark; ?>"</option>
					<option value="Perfect" style="background-color: Blue;">Perfect</option>
					<option value="Good" style="background-color: Green;">Good</option>
					<option value="Average" style="background-color: Yellow;">Average</option>
					<option value="Bad" style="background-color: Red;">Bad</option>
				</select>
			</div>
					
			<div class="input-group">
				<input type="hidden" name="Updated" value="1" />
				<input type="submit" class="btn" value="Update">
			</div>
		</form>
	</fieldset>
</form>
</body>
</html>