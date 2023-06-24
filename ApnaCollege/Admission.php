<!DOCTYPE html>
<html>
<head>
	<title>APNA College</title>
	<link rel="stylesheet" type="text/css" href="css\style1.css">
	<style>
		.modal {
		  display: none;
		  position: fixed;
		  z-index: 1;
		  padding-top: 100px;
		  left: 0;
		  top: 0;
		  width: 100%;
		  height: 100%;
		  overflow: auto;
		  background-color: rgb(0,0,0);
		  background-color: rgba(0,0,0,0.4); 
		}

		.modal-content {
		  background-color: #fefefe;
		  margin: auto;
		  padding: 20px;
		  border: 1px solid #888;
		  width: 80%;
		  text-align: center;
		  font-size: 20px;
		}

		.close {
		  color: #aaaaaa;
		  float: right;
		  font-size: 28px;
		  font-weight: bold;
		}

		.close:hover,
		.close:focus {
		  color: #000;
		  text-decoration: none;
		  cursor: pointer;
		}
		
		.popbtn{
			cursor: pointer;
			position: absolute;
			top: 80%;
			left: 50%;
			font-size: 30px;
			transform: translate(-50%,-50%);
		}
		.pbtn{
			border: 1px solid #fff;
			padding: 10px 30px;
			color: #fff;
			text-decoration: none;
		}
		.pbtn:hover{
			background-color:#fff;
			color: #000;
		}
	</style>
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<a href="home.php">
				<img src="css/images/logo.png">
			</div>
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="Departments.php">Departments</a></li>
				<li class="active"><a href="Admission.php">Admission</a></li>
				<li><a href="Management.php">Management</a></li>
				<li><a href="About.php">About APNA</a></li>
			</ul>
		</div>
			<div class="popbtn">
				<a id="myBtn" class="btn">Enroll Now</a>
			</div>
			<div id="myModal" class="modal">
				<div class="modal-content">
					<span class="close">&times;</span>
					<p>Sorry......!!</br></p>
					<p>Admission is Closed</p>
				</div>
			</div>
		<div class="par">
			<h1>What is an Undergraduate Degree?</h1>
			</br>
			<p>A student who is pursuing a degree after high school, at the first level of higher education at a college or university is an undergraduate student. 
			Undergraduate students are typically those working to earn a bachelor’s degree, an associate’s degree. An undergraduate degree is sometimes called a first degree outside of the US. 
			There are other types of undergraduate degrees as well outside of the US like foundation degree.</p>
			</br>
			<p>India hailed as having the world’s second-largest higher education system, has more than 550 institutions 
			and universities along with 16,000 other colleges offering bachelor’s degrees in various academic disciplines. 
			Within the 20-million student community in India, approximately 85% are undergraduates with enrolments increasing by around 15% every year.</p>
			
		</div>
	</header>
	<div class="footer">
        <footer>
			    <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="Departments.php">Department</a></li>
				<li class="list-inline-item"><a href="https://btu.ac.in/home/SYLLABUS-FOR-UNDERGRADUATE-PROGRAMME2020-2129">Syllbus</a></li>
				<li class="list-inline-item"><a href="#">Contact</a></li>
                <li class="list-inline-item"><a href="About.php">About</a></li>
            </ul>
			</br>
            <p class="copyright">APNA COLLEGE © 2022</p>
        </footer>
    </div>
	<script>
		var modal = document.getElementById("myModal");

		var btn = document.getElementById("myBtn");

		var span = document.getElementsByClassName("close")[0];

		btn.onclick = function() {
		  modal.style.display = "block";
		}

		span.onclick = function() {
		  modal.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == modal) {
			modal.style.display = "none";
		  }
		}
	</script>
</body>
</html>

