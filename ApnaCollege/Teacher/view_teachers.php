<?php
include_once "../Connect/connection.php";
      $key="";
      if(isset($_POST['searchtxt']))
	     $key=$_POST['searchtxt'];
	
      if($key !="")
	    $query="SElECT * FROM Teacher_entry WHERE Name  like '%$key%'";
      else
        $query="SELECT * FROM Teacher_entry ORDER BY Name";
      $result = mysqli_query($conn, $query);
   
      $msg="";
      $opr="";
      $id="";
      if(isset($_POST['Click'])):
      {
             $opr=$_POST['Click']; 
      }
      if(isset($_POST['rs_id']))
      { 
             $id=$_POST['rs_id']; 
      }
      if($opr=="Delete")
      {
            $del_sql="DELETE FROM Teacher_entry WHERE ID='$id'";
            $res=mysqli_query($conn, $del_sql);
            echo '<body style="background-color:orange">';
            if($res)
                $msg="<h1><b>Record Deleted Successfully...</b></h1>";
            else
				$msg="Could not Delete :".mysqli_error($conn);	
      }
      else if($opr=="View")
      {
             $view_sql="SELECT * FROM Teacher_entry where ID='$id'";
             $res=mysqli_query($conn, $view_sql);
             if(!$res)
                    $msg="Could not View :".mysqli_error($conn);
             $rows = mysqli_fetch_assoc($res);
             echo '<body style="background-color:orange">';
             echo "<label><b>ID:               </label>".$rows['ID'];
             echo "<br><br>";
             echo "<label>Name:             </label>".$rows['Name'];
             echo "</b><br><br>";
             echo "<label>Gender:           </label>".$rows['Gender'];
             echo "<br><br>";
             echo "<label>Post:             </label>".$rows['Post'];
             echo "<br><br>";
             echo "<label>Department:       </label>".$rows['Department'];
             echo "<br><br>";
             echo "<label>Room Number:      </label>".$rows['Room_No'];
             echo "<br><br>";
             echo "<label>Mobile Number:    </label>".$rows['Mobile_No'];
             echo "<br><br>";
             echo "<label>Email-ID:         </label>".$rows['Email_id'];
             echo "<br><br>";
             echo "<label>Date of Birth:    </label>".$rows['Date_of_Birth'];
             echo "<br><br>";
             echo "<label>Marital Status:   </label>".$rows['Marital_status'];
             echo "<br><br>";
             echo "<label>Salary:           </label>".$rows['Salary'];
             echo "<br><br>";
             echo "<label>Address:          </label>".$rows['Address'];
             echo "<br><br>";
      }
      else if($opr=="Update")
      {
         echo "For updating the records......<a href='Teachers_entry.php'>Click here</a>";
      }      
      echo $msg;
?>
<?php else: ?>
<html>
<head>
      <title>view teachers</title>
      <style>
             right
             {
                    float:right;
             }
             body 
             {
                    background-color: Chocolate;
                    
             }
             table
             {
                    background-color: White;
      </style>
</head>
<body>
      
      <form method="POST" action="view_teachers.php">
             <right><input type="text"  name="searchtxt" placeholder="Type name to be searched" ><input type="hidden" name="search" value="1" />
                 <input type="submit"  value="Search" > </right>
      </form>
      <button onclick="window.location.href='Teachers_entry.php';">Register New</button>
	  <button onclick="window.location.href='../ManPortal.php';">Management Portal</button>
      <br>
      <br>
      <br>
      <br>
      <table align="center" border="5px" style="width:1000px; line-height:40px;">
             <tr>
                    <th colspan="8"><h2>Teachers Record</h2></th> 
             </tr> 
                    <th>Name</th>
                    <th>Post</th>
                    <th>E-Mail</th>
                    <th>Department</th>
                    <th>Room No.</th>
                    <th>View</th>
                    <th>Update</th>
                    <th>Delete</th>
             </tr>
<?php
      $i=0;
      while ($row = mysqli_fetch_assoc($result)) 
      {
             $i++;
?>
             <form action="view_teachers.php" method="POST">
             <tr>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Post'];?></td>
                    <td><?php echo $row['Email_id'];?></td>
                    <td><?php echo $row['Department'];?></td>
                    <td><?php echo $row['Room_No'];?></td>
                    <td><input type="hidden" name="rs_id", value="<?php echo $row['ID'];?>"/><input type="submit" name="Click" value="View"/></td>
                    <td><a href="?tag=Teachers_entry&opr=Update&rs_id=<?php echo $row['ID'];?>" title="Upate"><input type="submit" name="Click" value="Update"/></a></td>
                    <td><input type="hidden" name="rs_id", value="<?php echo $row['ID'];?>"/><input type="submit" name="Click" value="Delete"/></td>
      
             </tr>
             </form>
<?php
      }
      mysqli_close($conn);
?>

      </table>
<?php endif; ?>
</body>
</html>
