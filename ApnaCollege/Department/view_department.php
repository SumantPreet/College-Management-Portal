<html>
<head>
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
<h1>Department Details</h1>
<div>
	<a href="../ManPortal.php" class="bbtn">Management Portal</a>
</div>
<?php
include_once "../Connect/connection.php";
$query = "select * from department order by dept_name";
$result = mysqli_query($conn, $query);
echo "<table border='1'>
<tr>
<th>Department</th>
<th>HOD</th>
<th>Total Faculty</th>
<th>Total Labs</th>
<th>Building Name</th>
<th>Update</th>
<th>Delete</th>
</tr>";

while ($row = mysqli_fetch_assoc($result))
{
echo"<tr>";
echo "<td>".$row["dept_name"]."</td>";
echo "<td>".$row["hod"]."</td>";
echo "<td>".$row["faculty_no"]."</td>";
echo "<td>".$row["total_labs"]."</td>";
echo "<td>".$row["building_name"]."</td>";
echo "<td><a href='update_entry.php?dname=$row[dept_name] &hname=$row[hod] &totalf=$row[faculty_no] &tlab=$row[total_labs] &bname=$row[building_name]'>Update</a></td>";
echo "<td><a href='delete_entry.php?dname=$row[dept_name]'>Delete</a></td>";
echo "</tr>";
}
echo"</table>";
mysqli_close($conn);
?>
</body>
</html>
