
	<html>
<head>
	<title>Score DataBase</title>
	<style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #0f5cb1;
            font-size: 68;
            font-family: 'Times New Roman';
			background-color : #d4e4f5;
        }
		.lgbtn{
			float: right;
			margin-top: -100px;
			margin-right: 30px;
			padding: 10px 30px;
			color: white;
			background: #1662a1;
			border-radius: 10px;
			text-decoration: none;
		}

        td {
            background-color: #d4e4f5;
            border: 1px solid black;
			font-weight: bold;
            padding: 10px 30px;
            text-align: center;
			font-weight: lighter;
        }
  
        th{
			font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
			color: white;
			background-color: #0f5cb1;
        }
		
		.new {
			padding: 20px 40px;
			margin-left: 45%;
			font-size: 20px;
			color: white;
			background: #1662a1;
			border: none;
			border-radius: 5px;
		}
	</style>

</head>
<body>
	<div>
		<h1>Student Score Details</h1>
		<a href="../ManPortal.php" class="lgbtn">Management Portal</a>
	</div>
	<div class=Table>
		<table class="table">
			<thead>
			<tr>
				<th>No</th>
				<th>Student ID</th>
				<th>Branch Name</th>
				<th>Subject Code</th>
				<th>Midterm Marks</th>
				<th>Final Exam Marks</th>
				<th>Remarks</th>
				<th colspan="2">Operation</th>
			</tr>
			</thead>
			<?php
				include_once "../Connect/connection.php";
				
				$sel="select No, sid, Branch, Subject_id, Midterm, Final, Remarks from score";
				
				$sql_sel = mysqli_query($conn, $sel);
				$i=0;
				while($row=mysqli_fetch_array($sql_sel)){
					$i++;
			?>
			<tr>
				<td><?php echo $i?></td>
				<td><?php echo $row['sid']?></td>
				<td><?php echo $row['Branch']?></td>
				<td><?php echo $row['Subject_id']?></td>
				<td><?php echo $row['Midterm']?></td>
				<td><?php echo $row['Final']?></td>
				<td><?php echo $row['Remarks']?></td>
				<td><a href="updatescore.php?id=<?php echo $row['No'] ?> &stuid=<?php echo $row['sid'];?> &bname=<?php echo $row['Branch'];?> &subid=<?php echo $row['Subject_id'];?> &midterm=<?php echo $row['Midterm'];?> &final=<?php echo $row['Final'];?> &remark=<?php echo $row['Remarks']?>"><i class='fas fa-sync'></a></td>
				<td><a href="delscore.php?id=<?php echo $row['No'] ?>"><i class='far fa-trash-alt'></i></a></td></tr>;
			
			</tr>
			<?php
				}
				mysqli_close($conn);
			?>
		</table>
	</div>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>