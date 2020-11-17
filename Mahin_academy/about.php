<div style="width: 100%; height: px; margin-bottom: 0px;    color: #19ad24;"><h1 style="text-align: center; ">MAHIN ACADEMY</h1></div>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />

</head>
<body>


<!--- heater start-->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="result/">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<!--- heater end-->





<!--- slider start-->
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img/img_nature_wide.jpg" style="width:100%">
  <div class="text">Gathering zone</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="img/img_snow_wide.jpg" style="width:100%">
  <div class="text">Classroom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="img/img_mountains_wide.jpg" style="width:100%">
  <div class="text">Library</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
}
</script>
<!--- slider end-->

<br><br><br><br><br><br>
<div class="about-dis">
  
  <p> <h3>MAHIN ACADEMY</h3>
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes

  </p>

  <img src="img/headmaster.png">
</div>


<div class="vision">
<h3 style="text-align: center;color: green;background-color: silver;">Our vission</h3>
<p style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
 ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
</p>  
</div>

<div class="mission">
<h3 style="text-align: center;color: green;background-color: silver;">Our achievement</h3>
<p style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
 ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
</p>  
</div>

<div class="teacher">
<h3 style="text-align: center;color: green;background-color: silver;">Teachers</h3>
<p style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
 ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
</p>  
</div>

<div class="student">
<h3 style="text-align: center;color: green;background-color: silver;">Students</h3>
<p style="margin-left: 10px; margin-right: 10px; margin-bottom: 10px;">
 ListDropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort List
Dropdowns Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
Google Maps Range Sliders Tooltips Slideshow Filter List Sort 
ListDropdowns Accordions Side Navigation Top Navigation
Accordions Side Navigation Top Navigation
Modal Boxes Progress Bars Parallax Login Form HTML Includes
</p>  
</div>




<br><br><br><br><br><br><br>


<!--- footer start-->
<div class="footer">
  <p>&#169 All right reserved by_<a href="#">Mizan</a></p>
</div>
<!--- footer end-->



</body>
</html> 