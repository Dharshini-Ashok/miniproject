<?php
    session_start();
?>
<html>
<head>
	<title> Care Connect </title>
	<script src="https://kit.fontawesome.com/71fb377387.js" crossorigin="anonymous"></script>
	<link href="style1.css" type="text/css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div>
		<i class="fa-solid fa-user fa-xl"></i>
		     Welcome  <?php echo $_SESSION['username'] ?>
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="500px" style="font-size:50px;font-family:forte;"> <font color="#944E63"> Care  </font><font color="#CAA6A6"> Connect</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="homepage.php"><b>HOME</b></a>  
							<a href="fileupload.php"><b>UPLOAD AND VIEW</B></a>
							<a href="contact.php"><b>CONTACT US</b></a>
							<a href="logout.php"><b>LOGOUT</b></a>
							

						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
<div class="slideshow-container">
	<div class="mySlides fade">
	  <div class="numbertext">1 / 3</div>
	  <img src="./image/a.jpg" style="width:100%; height:420px;">
	</div>
  
	<div class="mySlides fade">
	  <div class="numbertext">2 / 3</div>
	  <img src="./image/presc.jpeg" style="width:100%; height:420px;" >
	</div>
  
	<div class="mySlides fade">
	  <div class="numbertext">3 / 3</div>
	  <img src="./image/doctor.jpeg" style="width:100%; height:420px;">
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

<div class="border">
	<div class="headings">
		<h3><font color="#944E63"> About Care Connect </font> </h3><br>
	</div>

	<div class="content">
			<p><font color="#808080"> Care Connect is a comprehensive patient record management website designed to streamline healthcare processes and enhance patient care delivery.<br> With intuitive interface and robust features, Care Connect offers healthcare providers a platform to efficiently manage patient information, medical histories, treatment plans.<br> Patients can securely access their records. Care Connect allows patients to upload and view their prescriptions.</font></p>
	</div>
</div>
<br>
<br>
<br>
	<div class="nav_down">
		<div>
		 &copy; Care connect  
		</div>
	</div>

	<script>
		let slideIndex = 0;
        showSlides();

 function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
 }

	</script>
	
</body>
</html>