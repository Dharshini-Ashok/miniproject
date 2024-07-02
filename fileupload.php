<?php
    session_start();
?>
<html>
<head>
	<title> Care Connect  </title>
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
					<td width="500px" style="font-size:50px;font-family:forte;"> <font color="#944E63"> Care  </font><font color="#CAA6A6"> Connect</font> </td>
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
  <div class='container mt-5'>
    <div class='row'>
      <div class='col-md-6 mx-auto'>
        <form method='post' action='upload.php' enctype='multipart/form-data' >

          <label for="username"> Username : </label>
            <input type="text" id="username" name="username" /> <br> <br>
          <div class='form-group'>
          <label>Choose Image</label>
            <input type="file" multiple name="files[]" /> <br>
          </div><br>
          <input type='submit' name='submit' value='Submit' class='btn btn-primary' >
        </form>
      </div>
    </div>
    <div class='row'>
    <div class='col-md-6 mx-auto'>
    <h3>Files Uploaded by Username</h3><br>
    <form action="display.php" method="POST">
        <label for="search_username"> Username :</label>
        <input type="text" id="search_username" name="search_username" /><br><br>
        <input type='submit' name='search_submit' value='Search' class='btn btn-primary' >
    </form>
    </div>
    </div>
  </div>
  </div>

 
	
	
</body>
</html>
	
