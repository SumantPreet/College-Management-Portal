<html>
<head>
	<title>Score Entry</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<style>
		.new {
		  padding: 10px 30px;
		  margin-left: 150px;
		  font-size: 15px;
		  color: white;
		  background: #5F9EA0;
		  border: none;
		  border-radius: 5px;
		}
	</style>
</head>
<body>
	<div class="main">
		<?php

		include_once "../Connect/connection.php";

		if (isset($_POST['Submitted'])):
			$uname=$_POST['username'];
			$pass=$_POST['password'];
			$pass1=$_POST['reappass'];
			
			if (empty($uname)) {
				header("Location: register.php?error=User Name is required");
				exit();
			}else if(empty($pass)){
				header("Location: register.php?error=Password is required");
				exit();
			}else if(empty($pass1)){
				header("Location: register.php?error=Please Conform your Password");
				exit();
			}
		?>
			<div class="header">
				<h2>Registered Successful</h2>
			</div>
		<?php
			if($pass == $pass1){
				$sql="insert into users(username, password) value ('$uname','$pass')";
			
				if(!mysqli_query($conn, $sql))
				{
					echo "Error:" .$sql ."</br>" .mysqli_error($conn);
				}
				mysqli_close($conn);
			}
			else{
				header("Location: register.php?error=Password is not same");
			}
		?>
		<form>
			<p>You have been Registered Successfully now you can Sing In</p>
			<input type="button" class="new" onclick="window.location.href='login.php';" value="SIGN IN" />
		</form>
		<?php else: ?>
			<div class="header">
				<h2>Register</h2>
			</div> 
			<form method="post" action="register.php">
				<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" >
			</div>
			<div class="input-group">
				<label>Create Password</label>
				<input type="password" name="password">
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="reappass">
			</div>
			<div class="input-group">
				<input type="hidden" name="Submitted" value="1" />
				<button type="submit" class="btn">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Login</a>
			</p>
			</div>
		<?php endif; ?>
	</div>
</body>
</html>