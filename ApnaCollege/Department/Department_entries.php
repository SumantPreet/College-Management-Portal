<html>
<head>
	<title>Department Entry</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
input
{
font-size: inherit;
margin: 2px;
}
fieldset
{
background-color: lightcyan;
padding: 5px 10px;
display:inline-block;
border-width:1px;				
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
right
{
width: 55vw;
margin-right: 20vw;
float: right;
}
body 
{
    margin:100px -50px; padding:0px;
    text-align:center;
    align:center;
}

</style>
</head>
<body style="background-color:aquamarine;">
	
	<?php if (isset($_POST['form_submitted'])):
	$dname = $_POST['department'];
	$hname = $_POST['hodname'];
	$fnumber = $_POST['facultyno'];
	$lnumber = $_POST['totallabs'];
	$bname = $_POST['buildingname'];	
?>
<h2><p>Entries for Department <?php echo $dname;?> is submitted.</p></h2>
<?php
include_once "../Connect/connection.php";
$sql="insert into department values('$dname', '$hname', '$fnumber', '$lnumber', '$bname')";
if(mysqli_query($conn, $sql))
{
echo "Registered Succesfully.";
}
else
{
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<p> Go <a href="Department_entries.php">back</a> to the from</p>
<p> Please <a href="view_department.php">display</a> complete data</p>
<?php else: ?>
<fieldset>
<h1 style="text-align:center;">Entry Form for Departments</h1>
<form action="Department_entries.php"method="POST" style="width:100vw; margin-left:1vw;">

  <label for="Department">Department:</label>
  <input type="text" name="department" placeholder="Department Name" style="height:25px; width:150px;"><br><br>
  <label for="HOD">HOD:</label>
  <input type="text" name="hodname" placeholder="HOD's Name" style="height:25px; width:150px;"><br><br>
  <label for="facultyno">Total Faculty:</label>
  <input type="text" name="facultyno" placeholder="1,2,3" style="height:25px; width:150px;"><br><br>
  <label for="totallabs">Total Labs:</label>
  <input type="text" name="totallabs" placeholder="1,2,3" style="height:25px; width:150px;"><br><br>
  <label for="buildingname">Building Name:</label>
  <input type="text" name="buildingname" placeholder="building's name" style="height:25px; width:150px;"><br><br>
<right><input type="hidden" name="form_submitted" value="1" />
<input type="submit" value="SUBMIT"></right>
</fieldset>
</form>
<?php endif; ?>

</body>
</html>

