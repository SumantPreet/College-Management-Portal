
<?php
  
include_once "../Connect/connection.php";


$sql = "SELECT * FROM subjects ORDER BY id DESC ";
$result=mysqli_query($conn,$sql); 
?>
<!--HTML code to display data in tabular format-->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
    <title>Subject Details</title>
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
        <h1>Subject Details</h1>
        <!-- TABLE CONSTRUCTION-->
        <table>
            <tr>
        <th>ID</th>
        <th>Semester</th>
        <th>Subject Name</th>
        <th>Subject ID</th>
        <th>Update</th>
        <th>Delete</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['semester'];?></td>
                <td><?php echo $rows['subjectname'];?></td>
                <td><?php echo $rows['subjectid'];?></td>
                <!--<td><a href='update_student.php?id=$row[id] &semester=$row[semester] &subjectname=$row[subjectname] &subjectid=$row[subjectid] '>Update</a></td>-->
                <td><a href="update1.php?id=<?php echo $rows['id']; ?>">Update</a></td>
                <td><a href="delete1.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
            </tr>
            <?php
                }
             ?>
        </table>

    </section>
</body>
  
</html>