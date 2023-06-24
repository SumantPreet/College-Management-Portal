<html>
<head>
  <title>Login to Management Portal</title>
  <link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
  	<form method="post" action="server.php">
		<?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

		<?php } ?>
  	 	<div class="input-group">
			<label>Username</label>
			<input type="text" name="uname" placeholder="User Name"><br>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password" placeholder="Password"><br>
		</div>
		<div class="input-group">
			<button type="submit" class="btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Register</a>
		</p>
	</form>
</body>
</html>