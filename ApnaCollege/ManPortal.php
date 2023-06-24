<html>
<head>
	<title>Management Portal</title>
	<link rel="stylesheet" type="text/css" href="css\styleman.css">
</head>
<body>
	<header>
			<div class="title">
				<h1>Collage Management Portal</h1>
			</div>
			<div class = "lobtn">
				<a href="Management.php" class="lgbtn">Logout</a>
			</div>	
			
			<div class="new">
				<div class "button">
					<input type="button" class="btn" onclick="window.location.href='Student/Students_Entry.php';" value="Student Entry" />
					<input type="button" class="btn" onclick="window.location.href='Student/ViewStudent.php';" value="View Student Details" />
					</br></br>
				</div>
				<div class "button">
					<input type="button" class="btn" onclick="window.location.href='Teacher/Teachers_entry.php';" value="Teacher Entry" />
					<input type="button" class="btn" onclick="window.location.href='Teacher/view_teachers.php';" value="View Teachers Details" />
					</br></br>
				</div>
				<div class "button">
					<input type="button" class="btn" onclick="window.location.href='Subject/Subjects_Entry.php';" value="Subject Entry" />
					<input type="button" class="btn" onclick="window.location.href='Subject/View_Subject.php';" value="View Subject Details" />
					</br></br>
				</div>
				<div class "button">
					<input type="button" class="btn" onclick="window.location.href='Score/ScoreEntry.php';" value="Score Entry" />
					<input type="button" class="btn" onclick="window.location.href='Score/ViewScore.php';" value="View Score Details" />
					</br></br>
				</div>
				<div class "button">
					<input type="button" class="btn" onclick="window.location.href='Department/Department_entries.php';" value="Department Entry" />
					<input type="button" class="btn" onclick="window.location.href='Department/view_department.php';" value="View Departments Details" />
					</br></br>
				</div>
			</div>
	</header>
	
	<div class="footer">
        <footer>
			<div class="logo">
				<a href="home.php">
				<img src="css/images/logo.png">
			</div>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="Department.php">Departments</a></li>
                <li class="list-inline-item"><a href="About.php">About</a></li>
            </ul>
            <p class="copyright">APNA COLLEGE © 2022</p>
        </footer>
    </div>
</body>
</html>

