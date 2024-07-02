<?php
    session_start();
?>
<html>
<head>
	<title> Care connect </title>
	<script src="https://kit.fontawesome.com/71fb377387.js" crossorigin="anonymous"></script>
	<link href="style1.css" type="text/css" rel="stylesheet">
	
</head>
<body>
	
	<div class="top">
		<div>
			<i class="fa-solid fa-user fa-xl"></i>
			Welcome <?php echo $_SESSION['username'] ?>
		</div>
	</div>
	
	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="500px" style="font-size:50px;font-family:forte;"> <font color="#944E63"> Care  </font><font color="CAA6A6"> Connect</font> </td>
					<td> <br> <br>
						<font size="4px"> 
							<a href="homepage.php"><b>HOME</b></a> 
							<a href="fileupload.php"><b>UPLOAD AND VIEW</b></a>
							<a href="contact.php"><b>CONTACT US</b></a>
							<a href="logout.php"><b>LOGOUT</b></a>
						</font>
					</td>
				</tr>
			</table>
		</div>
	</div>
	
	
	
	
	
	<div class="nav_down">
	<div class="pages"> 
    <h3>Customer Care</h3> 
    <a href="#">Contact Us</a><br>
    <a href="#">FAQs</a><br> 
    <a href="#">Queries</a><br> 

</div> 
	</div>

		
		
	
	
	
	<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br>
	
	<div class="nav_down">
		<div>
		 &copy; Care connect
		</div>
	</div>
	
