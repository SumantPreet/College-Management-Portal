
<?php
include_once "../Connect/connection.php";

$sql = "SELECT * FROM students ORDER BY id DESC ";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Students Details</title>
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
        h1 {
            text-align: center;
            color: #006600;
            font-size: xx-large;
            font-family: 'Gill Sans', 'Gill Sans MT', 
            ' Calibri', 'Trebuchet MS', 'sans-serif';
        }
		.bbtn{
			float: right;
			margin-top: -60px;
			margin-right: 30px;
			padding: 10px 30px;
			color: white;
			background: #006600;
			border-radius: 10px;
			text-decoration: none;
		}
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
  
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
  
        td {
            font-weight: lighter;
        }
    </style>
</head>
  
<body>
    <section>
        <h1>Students Details</h1>
		<div>
			<a href="../ManPortal.php" class="bbtn">Management Portal</a>
		</div>
        
        <table>
            <tr>
        <th>ID</th>
        <th>FName</th>
        <th>LName</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>E-mail</th>
        <th>Department</th>
        <th>Update</th>
        <th>Delete</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['address'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['Department'];?></td>
                <!--<td><a href='update_student.php?id=$row[id] &fname=$row[fname] &lname=$row[lname] &dob=$row[dob] &address=$row[address] &gender=$row[gender] &phone=$row[phone] &email=$row[email] &Department=$row[Department]'>Update</a></td>-->
                <td><a href="update.php?id=<?php echo $rows['id']; ?>">Update</a></td>
                <td><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
            </tr>
            <?php
                }
             ?>
        </table>

    </section>
</body>
  
</html>