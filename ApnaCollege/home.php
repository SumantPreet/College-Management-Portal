<html>
<head>
	<title>APNA College</title>
	<link rel="stylesheet" type="text/css" href="css\home.css">
</head>
<body>
<header>
		<div class="main" id="section1">
			<div class="logo">
				<a href="home.php">
				<img src="css/images/logo.png">
			</div>
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="Departments.php">Departments</a></li>
				<li><a href="Admission.php">Admission</a></li>
				<li><a href="Management.php">Management</a></li>
				<li><a href="About.php">About APNA</a></li>
			</ul>
		</div>
		<div class="title">
			<h1>Welcome to APNA COLLEGE</h1>
		</div>
		<div class = "button">
			<a href="#section2" class="btn">Get Started</a>
		</div>
	</header>

<div class="container" id="section2">
	<h2 style="text-align:center">Gallery</h2>
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="css/images/img1.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="css/images/img2.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="css/images/img3.jpg" style="width:100%; height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="css/images/img4.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="css/images/img5.jpg" style="width:100%; height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="css/images/hostel.jpg" style="width:100%; height:500px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="css/images/img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="OutDoor Ground">
    </div>
    <div class="column">
      <img class="demo cursor" src="css/images/img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Tennis Court">
    </div>
    <div class="column">
      <img class="demo cursor" src="css/images/img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Swiming Pool">
    </div>
    <div class="column">
      <img class="demo cursor" src="css/images/img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Advanced Research lab">
    </div>
    <div class="column">
      <img class="demo cursor" src="css/images/img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Advanced Liberary">
    </div>    
    <div class="column">
      <img class="demo cursor" src="css/images/hostel.jpg" style="width:100%" onclick="currentSlide(6)" alt="Hostels Facilities">
    </div>
  </div>
</div>

	<div class = "data">
		<h2 style="text-align:center">Key Features</h2>
		<div id="tab1" class="tabcontent">
		  <h1>Network</h1>
		  <p>High Speed Ethernet and Wi-Fi In Campus</br>Well-equipped Computer Labs with lease line</p>
		</div>

		<div id="tab2" class="tabcontent">
		  <h1>Education</h1>
		  <p>Specious Reading Hall and State-of-the-art Library</br>Well in advanced, open access reference section.</p> 
		</div>

		<div id="tab3" class="tabcontent">
		  <h1>Classes</h1>
		  <p> Smart classes with all latest Tech</br>Not able to attend class? no Worries! both Online and Offline Classes</p>
		</div>

		<div id="tab4" class="tabcontent">
		  <h1>Faculty</h1>
		  <p>Renowned and Highly qualified Faculty</br>Toilets and Water Coolers with water purifier on each floor</p>
		</div>

		<button class="tablink" onclick="openCity('tab1', this, 'blue')" id="defaultOpen">Network</button>
		<button class="tablink" onclick="openCity('tab2', this, 'green')">Education</button>
		<button class="tablink" onclick="openCity('tab3', this, 'red')">Classes</button>
		<button class="tablink" onclick="openCity('tab4', this, 'orange')">Faculty</button>
	</div>
	<div class="back">	
		</br>
		<div class="btitle">
			<h1 style="text-align:center">Thanks For Your Visit</h1>
		</div>
		</br></br>
		<div class="bkbtn">
			<a href="#section1" class="btn">Back To Top</a>
		</div>
	</div>

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
	let slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  let i;
	  let slides = document.getElementsByClassName("mySlides");
	  let dots = document.getElementsByClassName("demo");
	  let captionText = document.getElementById("caption");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	  captionText.innerHTML = dots[slideIndex-1].alt;
	}
	</script>
	<script>
	$(document).ready(function(){

	  $("a").on('click', function(event) {


		if (this.hash !== "") {

		  event.preventDefault();

		  var hash = this.hash;

		  $('html, body').animate({
			scrollTop: $(hash).offset().top
		  }, 800, function(){
	   
			window.location.hash = hash;
		  });
		} 
	  });
	});
	</script>
	<script>
		function openCity(cityName,elmnt,color) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablink");
		  for (i = 0; i < tablinks.length; i++) {
			tablinks[i].style.backgroundColor = "";
		  }
		  document.getElementById(cityName).style.display = "block";
		  elmnt.style.backgroundColor = color;

		}

		document.getElementById("defaultOpen").click();
	</script>
		
</body>
</html>
