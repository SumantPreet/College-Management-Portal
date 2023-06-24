<?php
include_once "../Connect/connection.php";
?>

<?php
$dept = $_GET['dname'];
$hod = $_GET['hname'];
$faculty = $_GET['totalf'];
$labs = $_GET['tlab'];
$building = $_GET['bname'];
?>
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

<?php
if(isset($_POST['Submit']))
{
	$hod = $_POST['hodname'];
	$faculty = $_POST['facultyno'];
	$labs = $_POST['totallabs'];
	$building = $_POST['buildingname'];	
echo $dept;
$sql="update department set HOD='$hod',faculty_no='$faculty',total_labs='$labs',building_name='$building'where dept_name='$dept'";
mysqli_query($conn, $sql);

header('location:./view_department.php');
}
?>

<fieldset>
<h1 style="text-align:center;">Update Department Entries</h1>
<form action=""method="POST" style="width:100vw; margin-left:1vw;">
  <label for="Department">Department:</label>
  <input type="text" name="department" value="<?php echo $dept; ?>" style="height:25px; width:150px;"><br><br>
  <label for="HOD">HOD:</label>
  <input type="text" name="hodname" value="<?php echo $hod; ?>" style="height:25px; width:150px;"><br><br>
  <label for="facultyno">Total Faculty:</label>
  <input type="text" name="facultyno" value="<?php echo $faculty; ?>" style="height:25px; width:150px;"><br><br>
  <label for="totallabs">Total Labs:</label>
  <input type="text" name="totallabs" value="<?php echo $labs; ?>" style="height:25px; width:150px;"><br><br>
  <label for="buildingname">Building Name:</label>
  <input type="text" name="buildingname" value="<?php echo $building; ?>" style="height:25px; width:150px;"><br><br>
<right><input type="hidden" name="form_submitted" value="1" />
<input type="submit" value="SUBMIT" name="Submit"></right>
</fieldset>
</form>

</body>
</html>