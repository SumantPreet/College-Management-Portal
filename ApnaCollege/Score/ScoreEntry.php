<html>
<head>
	<title>Score Entry</title>
	<link rel="stylesheet" type="text/css" href="../css/stylescr.css">
</head>
<body>
	<div class="main">
		<?php

		include_once "../Connect/connection.php";

		if (isset($_POST['Submitted'])):
			$sid=$_POST['StudentId'];
			$bname=$_POST['Branch'];
			$subid=$_POST['SubjectId'];
			$mid=$_POST['MidtermMarks'];
			$final=$_POST['FinalExamMarks'];
			$remark=$_POST['Remark'];
		?>
			<div class="header">
				<h2>Submission Successful</h2>
			</div>
		<?php	
			$sql="insert into Score(sid, Branch, Subject_id, Midterm, Final, Remarks) value ('$sid','$bname','$subid','$mid','$final','$remark')";
			
			if(!mysqli_query($conn, $sql))
			{
				echo "Error:" .$sql ."</br>" .mysqli_error($conn);
			}
			mysqli_close($conn);
		?>
			<form>
				<input type="button" class="new" onclick="window.location.href='ScoreEntry.php';" value="Next Entry" />
				</br></br>
				<input type="button" class="new" onclick="window.location.href='ViewScore.php';" value="View Entry" />
			</form>
		<?php else: ?>
			<div class="header">
				<h2>Score Entry Form</h2>
			</div>
			<form action="ScoreEntry.php" method="POST">
				<div class="input-group">	
					<label>StudentId <sup class="star">*</sup> </label>
					<input type="text" name="StudentId" placeholder="StudentId" class="padding"><br><br>
				</div>
				
				<div class="input-group">
					<label>Branch <sup class="star">*</sup></label>
					<select id="Branch" name="Branch" class="select">
						<option selected disabled>-select-</option>
						<option value="Computer Science and Engineering">CSE</option>
						<option value="Civil Engineering">CE</option>
						<option value="Mechanical Engineering">ME</option>
						<option value="Electrical Engineering">ELE</option>
						<option value="Electronics and Communication Engineering">ECE</option>
						<option value="Electronics and Instrumentation Engineering">EIE</option>
					</select>
				</div>
				
				<div class="input-group">
					<label>SubjectId <sup class="star">*</sup></label>
					<input type="text" name="SubjectId" placeholder="SubjectId" class="padding"><br><br>
				</div>
				
				<div class="input-group">	
					<label>MidtermMarks <sup class="star">*</sup></label>
					<input type="text" name="MidtermMarks" placeholder="MidtermMarks" class="padding"><br><br>
				</div>
				
				<div class="input-group">	
					<label>FinalExamMarks <sup class="star">*</sup></label>
					<input type="text" name="FinalExamMarks" placeholder="FinalExamMarks" class="padding"><br><br>
				</div>
				
				<div class="input-group">
					<label>Remark</label>
						<select id="Remark" name="Remark" class="select">
							<option value="-">-select-</option>
							<option value="Perfect" style="background-color: Blue;">Perfect</option>
							<option value="Good" style="background-color: Green;">Good</option>
							<option value="Average" style="background-color: Yellow;">Average</option>
							<option value="Bad" style="background-color: Red;">Bad</option>
						</select>
				</div>
				
				<div class="input-group">
					<input type="hidden" name="Submitted" value="1" />
					<input type="submit" class="btn" value="Submit">
				</div>
			</form>
		<?php endif; ?>
	</div>
</body>
</html>