<?php
include_once("config.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$adress=$_POST['addrss'];
	$query=mysqli_query($con,"insert into data(name,email,contactno,address) values('$name','$email','$contactno','$adress')");
	if($query)
	{
	echo "<script>alert('Data inserted successfully');</script>";
	}
	else
	{
		echo "<script>alert('Data not inserted');</script>";
	}
}
 ?>



<div style="width: 100%; height: px; margin-bottom: 0px;    color: #19ad24;"><h1 style="text-align: center; ">MAHIN ACADEMY</h1></div>
<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" />
</head>

<body>

<!---Header start-->
<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="result/">Result</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="about.php">About</a></li>
</ul>
<!---Header end-->


<!---slider start-->
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
<!---slider end-->

<br><br><br><br>
<!---contact form start-->
<div class="container-fluid">

  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3 style="margin-left: 334px; color: #FFC300"><b>Please feel free to contact us_ <b></h3>
		
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
    <tr>
    <th height="62" scope="row">Name </th>
    <td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required placeholder="full name"/></td>
  </tr>  
  <tr>
    <th height="62" scope="row">Email id </th>
    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required placeholder="email id"/></td>
  </tr>
  <tr>
    <th height="62" scope="row">Contact no</th>
    <td width="71%"><input type="text" name="contactno" id="contactno" value=""  class="form-control" maxlength="10" required placeholder="phone no."/></td>
  </tr>
   <tr>
    <th height="62" scope="row">Opinions</th>
    <td width="71%"><textarea name="addrss" class="form-control"  required placeholder="tell us what you want"></textarea> </td>
  </tr>
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>

      </div>
    </div>
  </div>
  <!---contact form end-->
		
<!---contact info -->
<div class="ctf">
 <h3 style="text-align: left;">Contact Us_</h3>  <br>
<h5>Email: <a href="#">mahinacademy@gmail.com</a></h5> 
<h5>phone: <a href="#"> 01234567 </a></h5> 
<h5>Facebook: <a href="#">www.fb.com/mahin-academy</a></h5> 
<h5>twitter: <a href="#">www.twitter.com/mahinacademy</a></h5>
<h5>website: <a href="#">www.mahinacademy.com</a></h5>
  </div>
<!---contact info end-->
<br><br><br><br><br><br><br>


<!---footer start-->
<div class="footer">
  <p>&#169 All right reserved by_<a href="#">Mizan</a></p>
</div>
<!---footer end-->

<!---js/bootstrap connection-->

</div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html> 