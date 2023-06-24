<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}

::-webkit-scrollbar {
  width: 20px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background: blue; 
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
header{
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(1.jpg);
	height: 150vh;
	background-size: cover;
	background-position: center;
}

ul{
	float: right;
	list-style-type: none;
	margin-top: 20px;
}

ul li{
	display: inline-block;
}

ul li a{
	text-decoration: none;
	color: #000;
	padding: 5px 10px;
	border: 1px solid transparent;
	transition: 0.5s ease;
}

ul li a:hover{
	background-color:#000;
	color: #fff;
}

ul li.active a{
	background-color:#000;
	color: #fff;
}	
.logo img{
	float: left;
	width: 350px;
	height: auto;
}

.main{
	max-width: 1500px;
	margin: auto;
}

body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

.container {
  position: relative;
}

.mySlides {
  display: none;
}

.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 16.66%;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.title h1{
	color: #fff;
	font-size: 55px;
}

.button{
	position: absolute;
	top: 60%;
	left: 50%;
	transform: translate(-50%,-50%);
}

.btn{
	border: 1px solid #fff;
	padding: 10px 30px;
	color: #fff;
	text-decoration: none;
}

.btn:hover{
	background-color:#fff;
	color: #000;
}

.footer {
  padding:40px 0;
  background-color: black;
}
.footer .logo img{
	float: left;
	width: 400px;
	height: auto;
}
.footer ul {
  padding:0;
  list-style:none;
  text-align:center;
  color: #6a72ff;
  font-size:20px;
  line-height:1.6;
  margin-bottom:0;
}

.footer li {
  padding:0 10px;
}

.footer ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer ul a:hover {
  opacity:1;
}

.footer .copyright {
  margin-top:15px;
  text-align:center;
  font-size:16px;
  color: #8a8a8f;
  margin-bottom:0;
}


</style>
<body>
<header>
		<div class="main" id="section1">
			<div class="logo">
				<a href="home.php">
				<img src="logo.png">
			</div>
			<ul>
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="Departments.php">Departments</a></li>
				<li><a href="Circulers.php">Circulers</a></li>
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
	<h2 style="text-align:center">Slideshow Gallery</h2>
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="img1.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="img2.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="img3.jpg" style="width:100%; height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="img4.jpg" style="width:100%; height:500px">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="img5.jpg" style="width:100%; height:500px">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="hostel.jpg" style="width:100%; height:500px">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="img1.jpg" style="width:100%" onclick="currentSlide(1)" alt="OutDoor Ground">
    </div>
    <div class="column">
      <img class="demo cursor" src="img2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Tennis Court">
    </div>
    <div class="column">
      <img class="demo cursor" src="img3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Swiming Pool">
    </div>
    <div class="column">
      <img class="demo cursor" src="img4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Advanced Research lab">
    </div>
    <div class="column">
      <img class="demo cursor" src="img5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Advanced Liberary">
    </div>    
    <div class="column">
      <img class="demo cursor" src="hostel.jpg" style="width:100%" onclick="currentSlide(6)" alt="Hostels Facilities">
    </div>
  </div>
</div>

	<div class = "data">
		
	</div>

	<div class="footer">
        <footer>
			<div class="logo">
				<a href="home.php">
				<img src="#">
			</div>
                <ul class="list-inline">
                <li class="list-inline-item"><a href="home.php">Home</a></li>
                <li class="list-inline-item"><a href="Department.php">Departments</a></li>
                <li class="list-inline-item"><a href="About.php">About</a></li>
            </ul>
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

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    
</body>
</html>
